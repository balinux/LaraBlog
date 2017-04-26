#CODEANYWHERE FIX
1.  need install for php 7
2.  sudo apt-get install php7.0-dom php7.0-mbstring
3.  sudo apt-get install mcrypt php7.0-mcrypt
>     -add .htaccess
>       <IfModule mod_rewrite.c>
>       RewriteEngine on
>       RewriteRule ^(.*)$ public/$1 [L]
>       </IfModule>

**UPGRADE PHP 5.5 ke 7.0 **
*  apt-get install software-properties-common
*  sudo apt-get install -y language-pack-en-base && sudo LC_ALL=en_US.UTF-8 add-apt-repository ppa:ondrej/php
*  sudo apt-get update
*  sudo apt-get update && sudo apt-get purge php5-fpm && sudo apt-get --purge autoremove && sudo apt-get install php7.0-fpm php7.0-mysql php7.0-curl php7.0-gd php7.0-json php7.0-mcrypt php7.0-opcache php7.0-xml 
* sudo apt-get install php7.0 php7.0-mysql libapache2-mod-php7.0 php7.0-mcrypt php7.0-curl
* sudo a2dismod php5
* sudo a2enmod php7.0
*  sudo apt-get install mcrypt php7.0-mcrypt
*  sudo apt-get install php7.0-mbstring

**#Masalah storage**
1.  composer update
2.  Try the following commands on your shell:
3.  

**Clear Laravel cache and the compiled classes**

> php artisan cache:clear
> 
> php artisan clear-compiled
> Change the storage and cache directories permission
> 
> sudo chmod -R 777 storage
> 
> sudo chmod -R 777 bootstrap/cache
> Regenerate the composer autoload file
> 
> composer dump-autoload
> 


----------
##link Penting untuk upgrade PHP ##


https://www.bjornjohansen.no/upgrade-to-php7
https://www.stewright.me/2016/03/upgrade-php-7-0-ubuntu/
http://stackoverflow.com/questions/35715400/laravel-5-2-could-not-open-laravel-log
http://stackoverflow.com/questions/28468625/laravel-5-failed-opening-required-bootstrap-vendor-autoload-php
https://discuss.flarum.org/d/3741-after-installed-php7-then-i-run-composer-install-getting-errors
https://laracasts.com/discuss/channels/forge/error-while-updating-to-php-70-on-forge
