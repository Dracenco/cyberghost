{{--Most of the content here has been taken from CyberGhostvpn website.
 Several buttons and dynamic elements added.
 This page servers as master template which provides header and styling to every subsequent view--}}
<!doctype html>
<html>
<head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/styles.css')?>" type="text/css">

</head>
<body>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8"/>    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Cel mai bun serviciu VPN. Rapid Securizat și Anonim | CyberGhost VPN    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="publisher" content="CyberGhost" />
    <meta name="charset" content="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- icons -->
    <meta name="apple-itunes-app" content="app-id=583009522">
    <meta name="google-play-app" content="app-id=de.mobileconcepts.cyberghost">
    <link rel="icon" type="image/png" href="/favicon-192x192.png?v=1" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-160x160.png?v=1" sizes="160x160">
    <link rel="icon" type="image/png" href="/favicon-96x96.png?v=1" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-16x16.png?v=1" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png?v=1" sizes="32x32">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png?v=1">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png?v=1">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png?v=1">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png?v=1">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png?v=1">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png?v=1">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png?v=1">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png?v=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png?v=1">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png?v=1">
    <link rel="canonical" href="https://www.cyberghostvpn.com/ro_RO/" />
    <link rel="alternate" hreflang="en" href="https://www.cyberghostvpn.com/en_US/" />
    <link rel="alternate" hreflang="x-default" href="https://www.cyberghostvpn.com/en_US/" />
    <link rel="alternate" hreflang="de" href="https://www.cyberghostvpn.com/de_DE/" />
    <link rel="alternate" hreflang="es" href="https://www.cyberghostvpn.com/es_ES/" />
    <link rel="alternate" hreflang="pt" href="https://www.cyberghostvpn.com/pt_BR/" />
    <link rel="alternate" hreflang="fr" href="https://www.cyberghostvpn.com/fr_FR/" />
    <link rel="alternate" hreflang="it" href="https://www.cyberghostvpn.com/it_IT/" />
    <link rel="alternate" hreflang="pl" href="https://www.cyberghostvpn.com/pl_PL/" />
    <link rel="alternate" hreflang="ro" href="https://www.cyberghostvpn.com/ro_RO/" />
    <link rel="alternate" hreflang="ru" href="https://www.cyberghostvpn.com/ru_RU/" />
    <link rel="alternate" hreflang="nl" href="https://www.cyberghostvpn.com/nl_NL/" />
    <link rel="alternate" hreflang="ja" href="https://www.cyberghostvpn.com/ja_JP/" />
    <link rel="alternate" hreflang="ko" href="https://www.cyberghostvpn.com/ko_KR/" />
    <link rel="alternate" hreflang="sv" href="https://www.cyberghostvpn.com/sv_SE/" />

    <link href="https://www.cyberghostvpn.com/ro_RO/amp" rel="amphtml"/>

    <meta property="og:image" content="https://www.cyberghostvpn.com/img/pages/homepage/cg8/og-image.png"/><meta property="og:image_secure_url" content="https://www.cyberghostvpn.com/img/pages/homepage/cg8/og-image.png"/><meta property="og:title" content="Best VPN Service, Fast, Secure and Anonymous | CyberGhost VPN"/><meta property="og:description" content="Cyberghost VPN is used and trusted by millions of users which want to protect their online privacy, surf anonymously and access blocked content. Download Now!"/><meta name="description" content="CyberGhost este cel mai bun serviciu VPN din 2021. Cu peste 6500 de servere, oferă cea mai mare confidențialitate pentru toate dispozitivele: Windows, iOS, Mac, Android sau Linux."/><meta name="keywords" content=""/>
    <meta http-equiv="Content-Language" content="ro-RO" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css" integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous" />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js' charset='utf-8'></script>
    <script>jQuery.event.special.touchstart={setup:function(t,e,s){this.addEventListener("touchstart",s,{passive:!0})}};</script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&subset=latin-ext" rel="stylesheet">

    <!-- Start Visual Website Optimizer Asynchronous Code -->
    <script type='text/javascript'>
        window.vwoLoaded = false;
        var _vwo_code=(function(){
            var account_id=330100,
                settings_tolerance=5000,
                library_tolerance=5000,
                use_existing_jquery=false,
                /* DO NOT EDIT BELOW THIS LINE */
                f=false,
                d=document;
            return{
                use_existing_jquery:function(){
                    return use_existing_jquery;
                },
                library_tolerance:function(){
                    return library_tolerance;
                },
                finish:function(){
                    if(!f){
                        f=true;
                        var a=d.getElementById('_vis_opt_path_hides');
                        if(a)a.parentNode.removeChild(a);
                    }
                },
                finished:function(){
                    window.vwoLoaded = true;
                    return f;
                },
                load:function(a){
                    var b=d.createElement('script');
                    b.src=a;
                    b.type='text/javascript';
                    b.innerText;
                    b.onerror=function(){
                        _vwo_code.finish();
                    };
                    d.getElementsByTagName('head')[0].appendChild(b);
                },
                init:function(){
                    settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);
                    var a=d.createElement('style'),
                        b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',
                        h=d.getElementsByTagName('head')[0];
                    a.setAttribute('id','_vis_opt_path_hides');
                    a.setAttribute('type','text/css');
                    if(a.styleSheet)a.styleSheet.cssText=b;
                    else a.appendChild(d.createTextNode(b));
                    h.appendChild(a);
                    this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());
                    return settings_timer;
                }
            };
        }());
        _vwo_settings_timer=_vwo_code.init();
    </script>
    <!-- End Visual Website Optimizer Asynchronous Code -->
    <script>
        dataLayer = [{
            'project': 'www',
            'build': '3.59.0',
            'environment': 'production',
            'locale': 'ro_RO',
            'currency': 'EUR',
            'pageName' : 'homepage',
            'visitorId' : '9081d64459865685d9f6f9249f95efc2440b9f42a8a360835a0d70e9bc0a7a61',
            'tracking' : {"lp":"www_homepage"},
            'cfCountry' : 'RO',
            //VWO
            'CampaignId': 0,
            'VariationId': 0,
            'CampaignName': 0,
            'VariationName': 0,
            'instanceRegion' : 'cg_ew1',
            'instanceId': 'cg_6040db7e87e01',
            'InitialStartTime' : 1615621813,
            'internalAccount' : false    }];
    </script>
    <script>
        window.CONFIG = window.CONFIG || {};
        window.CONFIG.country = "RO";
        window.CONFIG.currency = 'EUR';
        window.CONFIG.products = JSON.parse('{"coupon":{"id":"40196","slug":"cyberghost-vpn-4","interval":"39","runtime":"36","prices":{"usd":"2.25","eur":"2","gbp":"1.99","chf":"2.15","aud":"3.11","jpy":"239","brl":"12.5","inr":"165","krw":"2600","rub":"175"},"totalPrice":{"chf":"84"},"features":{"boxcryptor":true,"nospy":true}},"left":{"id":"40183","slug":"cyberghost-vpn-1","interval":"1","runtime":"1","prices":{"usd":"12.99","eur":"11.99","gbp":"10.89","chf":"12.99","aud":"18.49","jpy":"1425","brl":"48.65","inr":"895","krw":"15900","rub":"815"},"features":[]},"middle":{"id":"40195","slug":"cyberghost-vpn-2","interval":"12","runtime":"12","prices":{"usd":"3.99","eur":"3.75","gbp":"3.45","chf":"4.15","aud":"5.55","jpy":"425","brl":"22.5","inr":"291","krw":"4550","rub":"307"},"features":{"nospy":true,"boxcryptor":true}},"right":{"id":"40197","slug":"cyberghost-vpn-3","interval":"24","runtime":"24","prices":{"usd":"3.49","eur":"3.19","gbp":"2.89","chf":"3.39","aud":"4.85","jpy":"369","brl":"19.5","inr":"255","krw":"3990","rub":"267"},"features":{"nospy":true,"boxcryptor":true}},"globalDefault":{"id":"10248","slug":"cyberghost-vpn-5","interval":"12","prices":{"eur":"4.15","usd":"4.15","chf":"4.75","aud":"5.66","gbp":"3.75","jpy":"455","rub":"272.5","inr":"289","brl":"16.5","krw":"4994"},"features":{"nospy":false}},"globalNospy":{"id":"10247","slug":"cyberghost-vpn-6","interval":"12","prices":{"eur":"4.99","usd":"4.99","chf":"5.66","aud":"6.75","gbp":"4.49","jpy":"545","rub":"274.5","inr":"347","brl":"19.5","krw":"5995"},"features":{"nospy":true}},"trial7days":{"id":"10266","slug":"cyberghost-vpn-trial","interval":"12","prices":{"eur":"5.25","usd":"5.25","chf":"5.95","aud":"7.25","gbp":"4.75","jpy":"575","rub":"344","inr":"364.5","brl":"20.5","krw":"6305"},"features":[]}}');
        window.CONFIG.upsell = false;
        window.CONFIG.locale = "ro_RO";
        window.CONFIG.language = "ro";

        window.CONFIG.cookieprefix = "cg_";
        window.CONFIG.cookiedomain = ".cyberghostvpn.com";

        window.CONFIG.dynamicPrice = "45&nbsp;&euro;";
        window.CONFIG.dynamicDiscount = "83";
        window.CONFIG.dynamicMonthlyPrice = '<span class="price">2</span>&nbsp;&euro;';
        window.CONFIG.dynamicMonthlyPriceCurrency = "&euro;";

        window.CONFIG.pageName = 'homepage';

        window.account = false;
    </script>
    <script>
        window.feedbackUri = '/feedback';
        window.feedbackParams = [];
        window.feedbackReady = false;

        window.feedbackCallbacks = window.feedbackCallbacks || [];

        window.distinctId = '89D54262-10B8-42FE-90A0-506DC10E6D4E';
        function addToResult(result, add) {
            result = result || {};
            add = add || {};
            for(var k in add){
                if(add.hasOwnProperty(k)){
                    result[k]=add[k];
                }
            }
            return result;
        }

        (function(window, $) {
            initFeedback(window.distinctId);

            window.Feedback = window.Feedback || {};
            window.Feedback.update = function(additionalParams, callback) {
                additionalParams = additionalParams || {};
                var distinct_id = window.distinctId || false;
                var feedbackUri = window.feedbackUri || false;
                if(feedbackUri) {
                    if(distinct_id) {
                        if(feedbackUri.indexOf('?')!==-1) {
                            feedbackUri += '&';
                        }
                        else {
                            feedbackUri += '?';
                        }
                        feedbackUri += 'distinct_id='+distinct_id;
                    }
                }
                console.log("Feedback.update: ",feedbackUri);
                updateFeedback(feedbackUri, additionalParams, callback);
            };
            window.Feedback.fetch = function(callback) {
                var distinct_id = window.distinctId || false;
                var feedbackUri = window.feedbackUri || false;
                if(feedbackUri) {
                    if(distinct_id) {
                        if(feedbackUri.indexOf('?')!==-1) {
                            feedbackUri += '&';
                        }
                        else {
                            feedbackUri += '?';
                        }
                        feedbackUri += 'distinct_id='+distinct_id;
                    }
                }
                console.log("Feedback.update: ",feedbackUri);
                updateFeedback(feedbackUri, callback);
            };

            function initFeedback(distinct_id) {
                distinct_id = distinct_id || false;
                var feedbackUri = window.feedbackUri;
                if(distinct_id) {
                    if(feedbackUri.indexOf('?')!==-1) {
                        feedbackUri += '&';
                    }
                    else {
                        feedbackUri += '?';
                    }
                    feedbackUri += 'distinct_id='+distinct_id;
                }
                //console.log("initFeedback: ",feedbackUri);
                //create/update feedback id
                updateFeedback(feedbackUri);
            }
            function updateFeedback(feedbackUri, params, callback) {
                //console.log("updateFeedback: ",feedbackUri);
                callback = callback || function(clickId) {};
                if(!feedbackUri || !feedbackUri.length) {
                    callback.call(this,[null]);
                    return false;
                }
                params = params || {};
                //console.log("params: ",params);

                params = addToResult(params, window.feedbackParams);
                // if(additionalParams) {
                //     var params = [];
                //     for(var i in additionalParams) {
                //         params.push(encodeURIComponent(i)+'='+encodeURIComponent(additionalParams[i]));
                //     }
                //     if(params && params.length) {
                //         if(feedbackUri.indexOf('?')!==-1) {
                //             feedbackUri += '&';
                //         }
                //         else {
                //             feedbackUri += '?';
                //         }
                //         feedbackUri += params.join('&');
                //     }
                // }
                //create/update feedback id
                $(function() {
                    $.ajax({
                        method: 'POST',
                        url: feedbackUri,
                        data: params,
                        cache: false,
                        withCredentials: true,
                        timeout: 30000, // sets timeout to 3 seconds
                        success: function(data) {
                            console.log("initFeedback: ",data);
                            if(data && data.hasOwnProperty('clickId')) {
                                window.clickId = data.clickId;

                                // if(data.clickData && data.clickData.distinct_id && window.mixpanel) {
                                //     window.mixpanel.identify(data.clickData.distinct_id);
                                // }

                                window.dataLayer = window.dataLayer || [];
                                window.dataLayer.push({
                                    event: 'feedback_init',
                                    clickId: data.clickId,
                                    clickData: data.clickData || {}
                                });
                            }
                            window.feedbackReady = true;

                            for (var i = 0; i < window.feedbackCallbacks.length; ++i) {
                                try {
                                    window.feedbackCallbacks[i](data.clickId, data.clickData);
                                } catch (err) {}
                            }
                            callback.call(this,[data.clickId, data.clickData]);
                        },
                        error: function(error) {
                            console.log("initFeedback: ",error);
                            window.feedbackReady = true;

                            for (var i = 0; i < window.feedbackCallbacks.length; ++i) {
                                try {
                                    window.feedbackCallbacks[i](false);
                                } catch (err) {}
                            }
                            callback.call(this,[null]);
                        }
                    });
                });
            }
            function fetchFeedback(feedbackUri, callback) {
                console.log("fetchFeedback: ",feedbackUri);
                callback = callback || function(clickId) {};
                if(!feedbackUri || !feedbackUri.length) {
                    callback.call(this,[null]);
                    return false;
                }
                //create/update feedback id
                $(function() {
                    $.ajax({
                        method: 'get',
                        url: feedbackUri,
                        data: {},
                        cache: false,
                        withCredentials: true,
                        timeout: 3000, // sets timeout to 3 seconds
                        success: function(data) {
                            console.log("fetchFeedback: ",data);
                            if(data && data.hasOwnProperty('clickId')) {
                                window.clickId = data.clickId;
                            }
                            callback.call(this,[data.clickId]);
                        },
                        error: function(error) {
                            console.log("fetchFeedback: ",error);
                            callback.call(this,[null]);
                        }
                    });
                });
            }
        })(window, $);
    </script>
    <link rel="stylesheet" href="https://assets.cyberghostvpn.com/css/37ed7ef172f72e7d8216803630e6ff0263d860fe522aad36e4f35e42655740f3.css?v=3.59.0"/>    </head>
<body class="en ">

{{--Header--}}
<div class='country-selection-exposed-bar'>

    <ul class='nav'>
        <li class="menu-item menu-country dropdown pull-left">
            <a href="#" class="menu-link menu-country-sel" id="country-selector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><div class="uk-flag"></div><i class="fa fa-angle-down" aria-hidden="true"></i></a>

            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="/en_US/"><span>English</span></a></li>
            </ul>
        </li>
    </ul>

</div>


<div class="exposed-bar " >
    <a class="client-info is-exposed" href='/ro_RO/avantaje/ascunde-ip' title='Vrei să îți ascunzi adresa de IP?' >
                    <span class="hidden-xs">
                <span class='.label'>Your Location:</span>
                <strong class="js-client-country">{{$ip['country']}}</strong>
                <span class='.label'>Your Language:</span>
                <strong class="js-client-country">{{$ip['language']}}</strong>
            </span>
        <span><span class='.label'>Your IP:</span> <strong class="js-client-ip"> {{$ip['ip']}}</strong></span>
        <span><span class='.label'>You are using :</span> <strong class="js-client-ip"> {{$ip['browser_name']}}</strong>Browser</span>
        <span><span class='.label'></span> <strong class="js-client-ip"> {{$ip['browser_version']}}</strong> version</span>
        <span><span class='.label'>Running on </span> <strong class="js-client-ip"> {{$ip['os']}}</strong> operating system</span>
        <span><span class='.label'>You are browsing using a  </span> <strong class="js-client-ip"> {{$ip['device']}}</strong></span>
        <span><span class='.label'>Your Status:</span> <strong class="js-client-exposed"><span class='status exposed'>EXPOSED<i class='fa fa-exclamation-triangle hidden-xs animated pulse infinite'></i></span></strong></span>
    </a>
</div>






<!-- navbar-fixed-top -->
<nav class=" main-menu navbar navbar-default ro navbar-darkblue" id="main-header-piece" role="navigation">


    <div class="container-fluid">

        <!-- brand -->
        <div class="navbar-header pull-left" id="logo-item">
            <a class="navbar-brand" href="/ro_RO/">
                <img class='cg-logo' src="https://www.cyberghostvpn.com/img/element/main-menu/cyberghost_menu_logo_dark@2x.png" alt="CyberGhost VPN">
            </a>
        </div>


        <div class="navigation-buttons-section">

            <ul class="nav navbar-nav" id="navigation-menu-header">

                <!-- What Is VPN -->
                <li class="menu-item dropdown menu-item-apps">

                    <a
                        href="#"
                        class="dropdown-toggle menu-link"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        What is VPN&nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>



                </li>


                <!-- Features -->
                <li class="menu-item dropdown">
                    <a
                        href="#"
                        class="dropdown-toggle menu-link"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Features&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                    </a>
                </li>


                <!-- VPN Apps -->
                <li class="menu-item dropdown menu-item-apps">


                    <a
                        href="#"
                        class="dropdown-toggle menu-link"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        VPN Apps&nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>

                </li>


                <!-- Pricing -->
                <li id="nav-buy" class='menu-item' title="Prețuri">
                    <a
                        class='menu-link '
                        href="#"
                        data-cp="header_navigation_pricing_link"
                        data-ctatype="order"
                    >
                        Pricing                        </a>
                </li>


                <!-- Servers -->
                <li class="menu-item dropdown menu-item-servers">
                    <a
                        href="#"
                        class="dropdown-toggle menu-link"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >

                        Servers&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                    </a>
                </li>

                <!-- Privacy Hub (EN only) -->
                <li id="nav-privacyhub" class='menu-item' title="Privacy Hub">
                    <a class='menu-link' href="#">Privacy Hub</a>
                </li>

                <!-- Help -->
                <li id="nav-help" class='menu-item' title="Ajutor">
                    <a class='menu-link' href="#" target='_blank'>Help</a>
                </li>

            </ul>

        </div>

{{--Header Buttons section--}}
        <div class="navigation-buttons-section">

            <ul class="nav navbar-nav" id="navigation-menu-header-right">


                <li class='menu-item'>
                    <!-- Buy Now -->
                    <a href="#" class=" menu-btn primary menu-cta-default" data-ctatype="order" data-cp="homepage_header_navigation_button_order" data-campaign="productlaunchcg8"><span class='large-desktop'>Buy Now -79% Discount</span><span class='small-desktop'>Obține o REDUCERE de 83%</span></a>                    </li>
                <!-- My Account -->
                <li id="nav-account" class='menu-item' title="Contul meu">
                    <a href="#" class="menu-line-btn white" target="_blank">
                        My Account                        </a>
                </li>
                <li id="nav-account" class='menu-item price-list-button' title="price-list">
                <a href="/pricelist" class=" menu-btn primary menu-cta-default" data-ctatype="order" data-cp="homepage_header_navigation_button_order" data-campaign="productlaunchcg8"><span class='large-desktop'>Check out our price list!</span></a>
                </li>
            </ul>

        </div> <!-- collapse -->

    </div>

</nav>

{{--Body content--}}
<main id="content" class="content__homepage"><!-- Homepage Jumbotron - CG 8 Launch - Jan '21 -->




<style>
    #couponEi-modal {
        background-color: rgba(0, 0, 0, 0.5);
    }

    #couponEi-modal .couponEi_list{
        font-size: 18px;
        margin-top: 20px;
        list-style-position: inside;
    }

    #couponEi-modal #fingerprint {
        width: auto;
        height: 140px;
        margin-top:60px;
    }

    #couponEi-modal .small-pt {
        margin-top:10px;
    }

    #couponEi-modal .title-no-timer {
        display: none;
    }

    #couponEi-modal .bold-span {
        font-weight: bold;
        display: inline-block !important;
    }

    #couponEi-modal .same-line {
        display: inline !important;
    }

    #couponEi-modal .fine-print {
        font-size: 13px;
        color: #c5cad2;
    }

    #couponEi-modal .trans_1 {
        font-size: inherit;
    }

    #couponEi-modal .trans_2 {
        font-size: inherit;
    }

    #couponEi-modal #couponEi-counter-ei {
        margin-top: -55px;
        margin-left: 330px;
        font-size: 15px;
    }

    #couponEi-modal .time_unit .text {
        font-size: 10px;
    }

    #couponEi-modal .main-button-timer {
        margin-top: 35px;
        border: 1px solid #FFCC00;
        border-radius: 80px;
        padding: 10px 10px;
        width: 87%;
        margin-left: 55px;
    }

    #couponEi-modal .main-button-timer .main-button {
        width: 40%;
        margin-top: -10px;
    }

    #couponEi-modal .main-button-timer .main-button > a {
        width: 120%;
        font-size: 23px;
        margin-left: 20px;
    }

    #couponEi-modal .main-button-notimer {
        display: none;
        margin-top: 25px;
    }

    #couponEi-modal .modal-dialog {
        width: 800px;
        height: 550px;
        max-width: 800px !important;
        background-color: transparent;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        margin: 0 auto;
    }

    #couponEi-modal .couponEi-container {
        position: relative;
        background-image: url("https://assets.cyberghostvpn.com/exit-intent/IDGuard/assets/exit_bg@2x.png");
        border: 2px solid white;
        background-size: 800px auto;
        height: 561px;
        text-align: center;
    }

    #couponEi-modal .modal-close {
        position: absolute;
        width: 25px;
        height: 25px;
        text-align: center;
        padding: 0px;
        top: 15px;
        right: 20px;
        color: #ffcc00;
        font-size: 20px;
        text-decoration: none;
        -webkit-transition: -webkit-transform .5s ease-in-out;
        transition: transform .5s ease-in-out;
        border-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #couponEi-modal .modal-close:hover {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        text-decoration: none;
    }

    #couponEi-modal .couponEi-cta {
        position: relative;
        font-size: 20px;
        font-weight: 700;
        text-decoration: none;
        background-color: #FFCC00;
        color: #323232;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        padding: 10px 25px;
        margin: 15px auto 0px;
        display: inline-block;
    }

    #couponEi-modal .couponEi-cta:hover {
        text-decoration: none;
        color: #323232;
    }

    #couponEi-modal .couponEi-cta.notimer {
        position: relative;
        font-size: 20px;
        font-weight: 700;
        text-decoration: none;
        background-color: #FFCC00;
        color: #323232;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        padding: 10px 75px;
        margin: 15px auto 0px;
        display: inline-block;
    }

    #couponEi-modal .couponEi-cta.notimer:hover {
        text-decoration: none;
        color: #323232;
    }

    #couponEi-modal .couponEi_bottom {
        padding: 15px 20px 0;
    }

    #couponEi-modal .couponEi_bottom span {
        text-align: center;
    }

    #couponEi-modal .couponEi_bottom .couponEi_title {
        font-size: 29px;
        font-weight: 800;
        padding: 5px 0;
        width: 100%;
    }

    #couponEi-modal .couponEi-counter-title {
        display: inline-block;
        font-size: 16px;
        font-weight: 600;
    }

    #couponEi-modal .couponEi_top .couponEi_top-title {
        position: absolute;
        font-style: italic;
        font-weight: bold;
        font-size: 20px;
        top: 70px;
        left: 95px;
    }

    #couponEi-modal .couponEi_top .couponEi-price {
        padding: 94px 0 0 0;
        display: inline-block;
        color: #323232;
    }

    #couponEi-modal .JPY .couponEi_top .couponEi-price,
    #couponEi-modal .CHF .couponEi_top .couponEi-price,
    #couponEi-modal .AUD .couponEi_top .couponEi-price {
        padding: 115px 0 0 0;
    }

    #couponEi-modal .couponEi-price .couponEi-price__back,
    #couponEi-modal .couponEi-price .couponEi-price__middle,
    #couponEi-modal .couponEi-price .couponEi-price__front {
        display: inline-block;
        color: #323232;
        font-size: 80px;
        font-weight: bold;
    }

    #couponEi-modal .couponEi-price .couponEi-price__middle.jpy,
    #couponEi-modal .couponEi-price .couponEi-price__front.jpy,
    #couponEi-modal .couponEi-price .couponEi-price__middle.aud,
    #couponEi-modal .couponEi-price .couponEi-price__front.aud,
    #couponEi-modal .couponEi-price .couponEi-price__middle.chf,
    #couponEi-modal .couponEi-price .couponEi-price__front.chf,
    body.pl #couponEi-modal .couponEi-price .couponEi-price__middle,
    body.pl #couponEi-modal .couponEi-price .couponEi-price__back,
    body.nl #couponEi-modal .couponEi-price .couponEi-price__middle,
    body.nl #couponEi-modal .couponEi-price .couponEi-price__back {
        font-size: 50px;
    }

    body.pl #couponEi-modal .couponEi_top .couponEi-price,
    body.nl #couponEi-modal .couponEi_top .couponEi-price {
        margin-top: 25px;
    }

    /* counter */
    #couponEi-counter-ei .time_unit {
        width: 55px;
        display: inline-block;
    }

    #couponEi-counter-ei .time_unit,
    #couponEi-counter-ei .time_unit .number,
    #couponEi-counter-ei .time_unit .text {
        display: inline-block;
        color: #ffffff;
    }

    #couponEi-counter-ei .time_unit.days {
        margin-left: -7px;
    }

    #couponEi-counter-ei .time_unit .number {
        font-size: 30px;
        font-weight: bold;
        width: 100%;
        text-align: center;
    }

    #couponEi-counter-ei .separator {
        display: inline-block !important;
        width: 20px;
        vertical-align: top;
        margin-top: 7px;
        font-weight: bold;
        font-size: 20px;
    }

    #couponEi-counter-ei br {
        display: none !important;
    }

    #couponEi-counter-ei .text.seconds,
    #couponEi-counter-ei .number.seconds {
        color: #FFCC00;
    }

    #second-modal__container {
        display: none;
        position: fixed;
        bottom: 35px;
        left: 20px;
        background-image: url("https://assets.cyberghostvpn.com/exit-intent/Organic-FS2/assets/fs.png");
        background-repeat: no-repeat;
        background-size: 280px auto;
        height: 176px;
        width: 280px;
        text-decoration: none;
        z-index: 3000;
        align-items: center;
        justify-content: center;
    }

    #second-modal__container .close_second {
        position: absolute;
        width: 25px;
        height: 25px;
        line-height: 27px;
        text-align: center;
        top: -5px;
        right: 35px;
        color: #ffcc00;
        font-size: 25px;
        text-decoration: none !important;
        -webkit-transition: -webkit-transform .5s ease-in-out;
        transition: transform .5s ease-in-out;
        text-shadow: 0px 0px 2px #323232;
        border: none;
    }

    #second-modal__container .close_second:hover {
        cursor: pointer;
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
        text-decoration: none;
    }

    #second-modal__container .buy_now {
        font-size: 20px;
        font-weight: 600;
        color: #323232 !important;
        text-decoration: none !important;
        padding: 10px 10px 0 10px;
        display: block;
        position: relative;
        top: 50%;
        transform: translateY(-50%);
        text-align: center;
        border: none;
        line-height: 25px;
    }
</style>

@yield('content')


</body>
</html>
