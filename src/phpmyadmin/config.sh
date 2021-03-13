mkdir /run/nginx
chmod 775 /etc/phpmyadmin/config.inc.php

# running
php-fpm7
nginx -g "daemon off;"