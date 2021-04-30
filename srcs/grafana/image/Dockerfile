FROM alpine:3.12
RUN apk update
RUN apk add vim
RUN apk add telegraf --no-cache --repository http://dl-2.alpinelinux.org/alpine/edge/community

COPY config.sh healthy.sh /tmp/
COPY grafana-7.3.6-r0.apk /tmp
RUN apk add --allow-untrusted /tmp/grafana-7.3.6-r0.apk
COPY grafana.db /usr/share/grafana/data/

RUN mkdir -p /etc/telegraf
COPY telegraf.conf /etc/telegraf/telegraf.conf

EXPOSE 3000
ENTRYPOINT sh /tmp/config.sh