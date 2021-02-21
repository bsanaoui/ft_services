FROM alpine:3.7
RUN apk update
RUN apk add vsftpd vim

RUN mkdir /etc/cert
COPY vsftpd.pem /etc/cert
COPY vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY config.sh  /tmp

ENTRYPOINT sh /tmp/config.sh