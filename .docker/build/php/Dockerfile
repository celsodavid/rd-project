ARG PHP_VERSION
FROM php:${PHP_VERSION}-alpine

RUN apk --update add --virtual build-dependencies build-base openssl-dev autoconf \
    jpeg-dev libpng-dev freetype-dev libxslt-dev icu-dev libzip-dev bash supervisor bzip2-dev postgresql-dev icu-libs \
  && pecl install mongodb-1.6.1 redis xdebug \
  && docker-php-ext-enable mongodb redis xdebug \
  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
  && docker-php-ext-configure intl --enable-intl

RUN docker-php-ext-install gd bcmath intl xsl pdo pdo_mysql soap zip bz2 calendar exif pdo_pgsql sockets pgsql

# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    mkdir /usr/local/.composer && chmod 777 -R /usr/local/.composer

# Set default locale for the environment
ENV LC_ALL C.UTF-8
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US.UTF-8
