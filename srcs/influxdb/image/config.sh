/usr/sbin/influxd &
telegraf --config /etc/telegraf/telegraf.conf &
tail -F /dev/null