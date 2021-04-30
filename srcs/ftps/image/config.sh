adduser -D cmos
echo "cmos:123456" | chpasswd


# running
telegraf --config /etc/telegraf/telegraf.conf &
vsftpd /etc/vsftpd/vsftpd.conf