FROM php:7.4-fpm

RUN apt-get update; \
    apt-get -y install apt-utils libxml2-dev memcached libmemcached-tools git zip; \
    docker-php-ext-install mysqli pdo pdo_mysql tokenizer xml pcntl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY composer*.json ./

RUN composer install

COPY . .

EXPOSE 8000

CMD composer install \
    && php -S 0.0.0.0:8000 -t public