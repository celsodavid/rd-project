FROM php:7.3.12-fpm-alpine

RUN apk upgrade --update

# lib dependencies
RUN apk add jpeg-dev libpng-dev freetype-dev libxslt-dev icu-dev libzip-dev

# install extensions
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
&& docker-php-ext-install gd bcmath xsl intl pdo pdo_mysql soap zip

#RUN apk add nginx supervisor git openssh

# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set default locale for the environment
ENV LC_ALL C.UTF-8
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US.UTF-8

RUN apk update && apk add bash
RUN apk add --no-cache bash

RUN mkdir /usr/local/.composer
RUN chmod 777 -R /usr/local/.composer
