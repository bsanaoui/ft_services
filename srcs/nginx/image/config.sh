# Setup Localhost html
mkdir -p /var/www/localhost/html
chmod 755 /var/www/localhost/html
chown -R nginx /var/www/localhost/html

# Setup Nginx Config
chown -R nginx: /etc/nginx/conf.d/default.conf
chmod 755 /etc/nginx/conf.d/default.conf
mkdir /run/nginx/

# Setup SSL
openssl req -x509 -nodes -subj "/C=MA/ST=ST/L=AG/O=D/CN=1337.bsanaoui"  -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt

# Setting up OpenRC
mkdir	/run/openrc
touch	/run/openrc/softlevel
rc-status

# Setup SSH
ssh-keygen -A

# Create User For SSH
adduser -D cmos
echo "cmos:1234" | chpasswd