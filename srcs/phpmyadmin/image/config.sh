mkdir /run/nginx
mv /tmp/config.inc.php /etc/phpmyadmin
chmod 775 /etc/phpmyadmin/config.inc.php

# running
telegraf --config /etc/telegraf/telegraf.conf &
php-fpm7
nginx -g "daemon off;" &
tail -F /dev/null