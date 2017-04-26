#CODEANYWHERE FIX
  - need install for php 7
    -sudo apt-get install php7.0-dom php7.0-mbstring
    -sudo apt-get install mcrypt php7.0-mcrypt
    -add .htaccess
      <IfModule mod_rewrite.c>
      RewriteEngine on
      RewriteRule ^(.*)$ public/$1 [L]
      </IfModule>
