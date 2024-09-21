FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    curl \
    unzip \
    git \
    autoconf \
    build-essential \
    libxml2-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install xdebug-3.3.1

RUN docker-php-ext-install soap

WORKDIR /var/www/html
