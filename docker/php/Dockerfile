FROM php:8.2.0-fpm
RUN apt-get update && apt-get install apt-file -y && apt-file update && apt-get install vim -y --no-install-recommends \
        git \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        librabbitmq-dev \
        unzip \
    && docker-php-ext-install \
        zip \
        intl \
        mysqli \
        pdo pdo_mysql \
        pcntl \
        sockets

RUN pecl install amqp-2.1.1
RUN docker-php-ext-enable amqp
RUN pecl install redis
RUN docker-php-ext-enable redis

RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer
WORKDIR /var/www/microservice-sap/
