FROM alpine:3.7
RUN apk update
RUN apk add vim

COPY config.sh  /tmp
COPY grafana-7.3.6-r0.apk /tmp
RUN apk add --allow-untrusted /tmp/grafana-7.3.6-r0.apk

EXPOSE 3000
ENTRYPOINT sh /tmp/config.sh