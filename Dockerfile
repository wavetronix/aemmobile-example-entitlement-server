FROM php:5.6-apache

MAINTAINER Andrew Porter <andrew.porter@wavetronix.com>

RUN docker-php-ext-install mysql \
  && docker-php-ext-install mysqli


# COPY .docker/config/php.ini /usr/local/etc/php/
COPY . /var/www/html/
