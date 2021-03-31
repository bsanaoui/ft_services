#!/bin/sh

# Config DB
if [ -d /var/lib/mysql/wordpress ] ;
then
        echo "DATABASE ALREADY EXISTS" >> /root/isExist
else
        echo "DATABASE DOES NOT EXIST" >> /root/isExist
        mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql

        mysqld --user=mysql & 

        # mysqladmin --silent --wait=30 ping || exit 1

        mysql -u root -e "CREATE USER 'admin'@'%' IDENTIFIED BY '1234'"
        mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%'"
        mysql -u root -e "CREATE DATABASE wordpress"\

                #  -e "CREATE DATABASE wordpress;" \
                #  -e "CREATE DATABASE phpmyadmin;" \

        pkill mysqld

fi
rm /etc/my.cnf.d/mariadb-server.cnf
mv /tmp/my.cnf /etc/my.cnf.d/mariadb-server.cnf
mysqld --user=mysql