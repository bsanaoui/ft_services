FROM alpine:3.7
RUN apk update
RUN apk add vsftpd

RUN mkdir /etc/cert
COPY vsftpd.pem /etc/cert
COPY vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY config.sh  /tmp

EXPOSE 21 20000 20001
ENTRYPOINT sh /tmp/config.sh