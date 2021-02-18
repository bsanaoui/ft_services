FROM alpine:3.7
RUN apk update
RUN apk add mysql mysql-client
COPY config.sh /tmp
RUN sh /tmp/config.sh

#To start service mysql
ENTRYPOINT mysqld --user=mysql