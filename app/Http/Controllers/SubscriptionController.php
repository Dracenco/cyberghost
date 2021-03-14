<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Browser;
use App\Http\Middleware\OperatingSystemValidator;
use Illuminate\Support\Facades\Config;
use Mobile_Detect;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Cookie\CookieJar;

class SubscriptionController extends Controller
{
    public function index($voucher = '')
    {

        // deciding which page to render based on the slug
        $layout = $this->pickPath();

        //detecting device type
        $device = $this->detectDeviceType();

        //detect operating system
        $osValidator = new OperatingSystemValidator();
        $os = $osValidator->getOperatingSystem();

        //detect browser type
        $browser = Browser::detect();

        //detect IP address and extract locale
        $ip = $_SERVER['REMOTE_ADDR'];
        $response = file_get_contents('http://api.hostip.info/get_html.php?ip=82.76.159.139');
        $resp = explode(' ', $response);
        $locale = (substr($resp[2], 0, 4));

        //get price list
        $prices = $this->getPrices($voucher, Config::get('cookieContent'));

        //Assembling page based on gathered information
        $header = [
            'header' => [
            'ip' => $resp[5],
            'country' => $resp[1],
            'language' => $locale,
            'os' => $os,
            'browser_name' => $browser['name'],
            'browser_version' => $browser['version'],
            'device' => $device
        ]];
        $data = array_merge($header,Config::get($layout));
        $data['pricing_widget'] = array_merge(
            ['title' => Config::get($layout . '.pricing_widget.title')],
            $prices
        );


        return view('home', ['data' => $data]);
    }


    public function setCookie($data = []){
        // setting cookies and updating if any of the key values have changed
        $cookies = Cookie::get();
        foreach ($data as $key => $value){
            if (!empty($cookies[$key]) && $cookies[$key] == $value){
                continue;
            }
            setcookie($key, $value, time()+3600);
        }
    }

    public function pickPath(): string
    {
        //based on which slug was chosen the app will decide which config to load
        $currentURL = url()->current();
        $layout = '';

        if (strpos($currentURL, 'secondary')) {
            $layout = 'austriaPage';
        } elseif (strpos($currentURL, 'primary')) {
            $layout = 'premierLeaguePage';
        }

        return $layout;
    }

    public function detectDeviceType(): string
    {
        //fetching device type
        $detect = new Mobile_Detect();

        if ($detect->isMobile()) {
            $device = 'Mobile device';
        } else {
            $device = 'Desktop computer';
        }

        return $device;
    }

    public function getPrices($voucher = ''): array
    {
        //based on which OS the user is using the app will decide which price list section to render
        $osValidator = new OperatingSystemValidator();
        $os = $osValidator->getOperatingSystem();

        //store and fetch cookie
        $defaultCookie = Config::get('cookieContent');
        if (!empty($voucher)) {
            $defaultCookie['voucher'] = $voucher;
        }
        $this->setCookie($defaultCookie);

        $voucherValue = $_COOKIE['voucher'];

        //based on which OS is used fetch price list
        $prices = (strpos(strtolower($os), 'win') !== false) ?
                    Config::get('priceList.windows'):
                    Config::get('priceList.linux');

        //apply discount if correct voucher entered
        if (in_array($voucherValue,['regular','premium','platinum'])){
            foreach ($prices as $key => &$value) {
                $value = $value - bcmul($value,Config::get("discounts.{$voucherValue}"));
            }
        }

        return $prices;
    }

    public function showPrices(){

        //render price list page
        $prices = Config::get('priceList');

        return view('priceList', ['prices' => $prices]);
    }
}
