FROM alpine:3.7
RUN apk update
RUN apk add mysql mysql-client vim

COPY config.sh /tmp
COPY my.cnf /tmp

RUN mkdir /run/mysqld && chown -R mysql:mysql /run/mysqld

#To start service mysql
ENTRYPOINT sh /tmp/config.sh