FROM alpine:3.11

RUN apk update
RUN apk add influxdb --no-cache --repository http://dl-2.alpinelinux.org/alpine/edge/community
RUN apk add telegraf --no-cache --repository http://dl-2.alpinelinux.org/alpine/edge/community

RUN apk add vim

RUN mkdir -p /etc/telegraf
COPY telegraf.conf /etc/telegraf/telegraf.conf
COPY config.sh healthy.sh /tmp/

VOLUME /root/.influxdbv2
ENTRYPOINT sh /tmp/config.sh
