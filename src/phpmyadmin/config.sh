mkdir /run/nginx
mv /tmp/config.inc.php /etc/phpmyadmin
chmod 775 /etc/phpmyadmin/config.inc.php

# running
php-fpm7
nginx -g "daemon off;"