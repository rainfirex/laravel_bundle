FROM php:8.1-fpm

COPY ./browscap.ini /usr/local/etc/php
COPY ./php.ini /usr/local/etc/php

WORKDIR '/var/www'

# base
RUN apt-get update && apt-get install -y \
curl \
wget \
git \
libfreetype6-dev \
libjpeg62-turbo-dev \
libpng-dev \
libonig-dev \
libzip-dev \
libmcrypt-dev \
zip \
unzip \
nodejs \
npm  \
nano

# Install extensions
RUN docker-php-ext-install pdo pdo_mysql
#RUN docker-php-ext-install pdo_mysql mbstring exif pcntl intl bcmath gd
#RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
#RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install NPM
RUN curl https://www.npmjs.com/install.sh | sh

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN composer create-project laravel/laravel lar-app


COPY ./entrypoint.sh /entrypoint.sh

# message
#CMD composer --version && php --v

#RUN chown -R root:root /var/www
#RUN chmod -R 777 /var/www
#RUN chmod -R 777 /var/www/lar-app/storage/logs/laravel.log

#CMD php-fpm
CMD ["/entrypoint.sh"]