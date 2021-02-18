mkdir /run/nginx
chmod 775 config.inc.php

# running
php-fpm7
nginx -g "daemon off;" &
exec /bin/shß