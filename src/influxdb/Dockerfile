FROM alpine:3.7
RUN apk update
RUN apk add vim && \
    cd /tmp && wget https://dl.influxdata.com/influxdb/releases/influxdb2-2.0.4-linux-amd64.tar.gz && \
    tar xvfz influxdb2-2.0.4-linux-amd64.tar.gz

COPY config.sh  /tmp
VOLUME /root/.influxdbv2
ENTRYPOINT sh /tmp/config.sh