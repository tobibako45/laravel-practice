FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/

#RUN pecl install xdebug \
#    && docker-php-ext-enable xdebug

#RUN docker-php-ext-install pdo_mysql mysqli mbstring

RUN curl -sS https://getcomposer.org/installer | php -- --version=1.8.5 && \
    mv composer.phar /usr/local/bin/composer

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql

WORKDIR /var/www
