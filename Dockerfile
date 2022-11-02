FROM php:8.1-apache

RUN apt-get -y update

WORKDIR /var/www/html

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

ADD src /var/www/html/src

COPY index.php /var/www/html/index.php
COPY composer.json /var/www/html/composer.json
COPY /vendor/autoload.php /var/www/html/vendor/autoload.php

RUN composer dump-autoload

EXPOSE 80