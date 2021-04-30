FROM alpine:3.7
RUN apk update
RUN apk add vsftpd
RUN apk add telegraf --no-cache --repository http://dl-2.alpinelinux.org/alpine/edge/community

RUN mkdir /etc/cert
COPY vsftpd.pem /etc/cert
COPY vsftpd.conf /etc/vsftpd/vsftpd.conf

RUN mkdir -p /etc/telegraf
COPY telegraf.conf /etc/telegraf/telegraf.conf

COPY config.sh healthy.sh /tmp/

EXPOSE 21 20000 20001
ENTRYPOINT sh /tmp/config.sh