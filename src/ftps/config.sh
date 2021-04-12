adduser -D cmos
echo "cmos:123456" | chpasswd


# running
vsftpd /etc/vsftpd/vsftpd.conf