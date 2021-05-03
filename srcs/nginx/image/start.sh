# running
telegraf --config /etc/telegraf/telegraf.conf &
php-fpm7
nginx -g "daemon off;" &
rc-service sshd start
tail -F /dev/null