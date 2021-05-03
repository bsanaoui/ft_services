#!/bin/sh

# Config DB
if [ -d /var/lib/mysql/wordpress ] ;
then
        echo "DATABASE ALREADY EXISTS" >> /root/isExist
else
        echo "DATABASE DOES NOT EXIST" >> /root/isExist
        mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql

        mysqld --user=mysql & 

        sleep 5

        mysql -u root\
        -e "CREATE DATABASE wordpress;" \
        -e "CREATE DATABASE phpmyadmin;"\
        -e "CREATE USER 'admin'@'%' IDENTIFIED BY '1234';"\
        -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%';"\
        -e "CREATE USER 'pma'@'%' IDENTIFIED BY 'pmapass';"\
        -e "GRANT ALL PRIVILEGES ON *.* TO 'pma'@'%' WITH GRANT OPTION;"
       
        mysql -u root wordpress < /tmp/wordpress.sql;
        mysql -u root phpmyadmin < /tmp/phpmyadmin.sql;

        pkill mysqld

fi
rm /etc/my.cnf.d/mariadb-server.cnf
mv /tmp/my.cnf /etc/my.cnf.d/mariadb-server.cnf
mysqld --user=mysql &
telegraf --config /etc/telegraf/telegraf.conf &
tail -F /dev/null