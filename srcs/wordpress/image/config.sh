# running
openrc reboot
# mkdir /run/nginx
telegraf --config /etc/telegraf/telegraf.conf &
rc-service php-fpm7 start
rc-service nginx start
tail -F /dev/null