# running
mkdir /run/nginx
telegraf --config /etc/telegraf/telegraf.conf &
php-fpm7
nginx -g "daemon off;"