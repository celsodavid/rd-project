FROM php:7.3.12-fpm-alpine

RUN apk upgrade --update && apk update && apk add jpeg-dev libpng-dev freetype-dev \
    libxslt-dev icu-dev libzip-dev bash supervisor

# install extensions
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
&& docker-php-ext-install gd bcmath xsl intl pdo pdo_mysql soap zip

# COMPOSER

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    mkdir /usr/local/.composer && chmod 777 -R /usr/local/.composer && \
    $COMPOSER_HOME = /usr/local/.composer && composer global require hirak/prestissimo

# Set default locale for the environment
ENV LC_ALL C.UTF-8
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US.UTF-8