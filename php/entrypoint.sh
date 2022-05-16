#https://github.com/docker-library/wordpress/issues/205

echo "Initial custon setup...."

chown -R root:root /var/www
chmod -R 777 /var/www

exec "php-fpm"
