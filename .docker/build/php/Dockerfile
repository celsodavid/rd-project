ARG PHP_VERSION
FROM php:${PHP_VERSION}-alpine

RUN apk --update add --virtual build-dependencies build-base openssl-dev autoconf openssh \
    jpeg-dev libpng-dev freetype-dev libxslt-dev icu-dev libzip-dev bash supervisor bzip2-dev icu-libs git \
  && pecl install mongodb-1.6.1 redis \
  && docker-php-ext-enable mongodb redis \
  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
  && docker-php-ext-configure intl --enable-intl

RUN docker-php-ext-install gd bcmath intl xsl pdo pdo_mysql soap zip bz2 calendar exif sockets

# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --version=1.10.17 --filename=composer && \
    mkdir /usr/local/.composer && chmod 777 -R /usr/local/.composer

# Set default locale for the environment
ENV LC_ALL C.UTF-8
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US.UTF-8

RUN docker-php-ext-install opcache

#INSTALL APCU
RUN pecl install apcu-5.1.11 && docker-php-ext-enable apcu
#APCU

#Uncomment this line and run `bin/dev build` to enable xdebug
RUN pecl install -f xdebug-2.9.8 && docker-php-ext-enable xdebug

RUN composer self-update
#
#ADD https://raw.githubusercontent.com/mlocati/docker-php-extension-installer/master/install-php-extensions /usr/local/bin/
#
#RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
#    install-php-extensions imagick

