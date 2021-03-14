#Hi There!

This app was made using Laravel. Be sure to check their documentation.

In order to run the application please  download the contents of this repository and run composer install from your project's root directory.

As soon as you have done the steps above please run ***php artisan serve*** in your run directory.

Now when you visit ***http://localhost:8000/primary*** or ***http://localhost:8000/secondary*** you will be able to see the content of the pages.

Please note that there is also a ***http://localhost:8000/pricelist*** page as per requirements.

#Behaviour information

Small-gray section of the header at the top of the screen will provide detailed information regarding device type and user location, all of which is obtained by calling multiple helper functions. 
Some of the elements are obtained with the help of external libraries or third-party APIs while others are taken from global variables.

There is only one endpoint and it provides the possibility of rendering different versions of home page based on provided slug. An optional extra parameter can be given as slug which will be treated as voucher name and if it matches one of the many vouchers registered in config, the prices for products will drop accordingly.

There are a total of 16 scenarios that can displayed based on provided information.

VPN Austria page \
with Linux default prices\
with Linux 5% discount prices\
with Linux 10% discount prices\
with Linux 20% discount prices

with Windows default prices\
with Windows 5% discount prices\
with Windows 10% discount prices\
with Windows 20% discount prices


VPN premier league page\
with Linux default prices\
with Linux 5% discount prices\
with Linux 10% discount prices\
with Linux 20% discount prices

with Windows default prices\
with Windows 5% discount prices\
with Windows 10% discount prices\
with Windows 20% discount prices

Any feedback is much appreciated!


