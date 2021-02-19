# running
mkdir /run/nginx
nginx -g "daemon off;" &
php-fpm7
exec /bin/sh