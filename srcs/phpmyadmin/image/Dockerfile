FROM alpine:3.7
RUN apk update
RUN apk add nginx phpmyadmin php7-fpm php7-session \
    php7-common php7-iconv php7-json php7-gd php7-curl \
    php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo \
    php7-pdo_mysql php7-soap php7-xmlrpc php7-posix \
    php7-mcrypt php7-gettext php7-ldap php7-ctype php7-dom php7-mbstring vim
RUN apk add telegraf --no-cache --repository http://dl-2.alpinelinux.org/alpine/edge/community

RUN mkdir -p /etc/telegraf
COPY telegraf.conf /etc/telegraf/telegraf.conf

COPY nginx.conf  /etc/nginx/ 
COPY config.sh config.inc.php healthy.sh /tmp/
ENTRYPOINT sh /tmp/config.sh && top