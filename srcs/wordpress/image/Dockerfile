FROM alpine:3.11
RUN apk update
RUN apk add php7-common php7-iconv php7-json php7-gd  php7-curl php7-xml php7-mysqli php7-imap php7-cgi fcgi php7-pdo \
&& apk add  php7-pdo_mysql php7-soap php7-xmlrpc php7-posix php7-mcrypt php7-gettext php7-ldap php7-ctype php7 php7-fpm \
&& apk add php7-zlib php7-dom php7-session php7-mbstring vim nginx openrc

RUN apk add telegraf --no-cache --repository http://dl-2.alpinelinux.org/alpine/edge/community
RUN mkdir -p /etc/telegraf
COPY telegraf.conf /etc/telegraf/telegraf.conf

RUN mkdir /run/nginx
COPY default.conf  /etc/nginx/conf.d/

COPY wordpress.tar.gz /tmp
RUN tar zxvf /tmp/wordpress.tar.gz
RUN mv wordpress/ /var/www/
COPY wp-config.php /var/www/wordpress/

COPY config.sh healthy.sh /tmp/
ENTRYPOINT sh /tmp/config.sh