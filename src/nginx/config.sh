# Setup Localhost html
mkdir -p /var/www/localhost/html
chmod 755 /var/www/localhost/html
chown -R nginx /var/www/localhost/html

# Setup Nginx Config
chown -R nginx: /etc/nginx/conf.d/default.conf
chmod 755 /etc/nginx/conf.d/default.conf
mkdir /run/nginx/