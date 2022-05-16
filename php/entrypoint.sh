#https://github.com/docker-library/wordpress/issues/205

echo "Initial custon setup...."

chmod -R 777 /var/www

exec "php-fpm"
