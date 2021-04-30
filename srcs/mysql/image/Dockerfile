FROM alpine:3.7
RUN apk update
RUN apk add mysql mysql-client vim
RUN apk add telegraf --no-cache --repository http://dl-2.alpinelinux.org/alpine/edge/community

COPY config.sh my.cnf wordpress.sql phpmyadmin.sql healthy.sh /tmp/

RUN mkdir -p /etc/telegraf
COPY telegraf.conf /etc/telegraf/telegraf.conf

RUN mkdir /run/mysqld && chown -R mysql:mysql /run/mysqld

#To start service mysql
ENTRYPOINT sh /tmp/config.sh