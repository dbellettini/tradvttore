FROM php:8-apache

RUN apt-get update &&\
    apt-get install -y \
    git \
    zip \
    unzip \
    libicu-dev \
    iputils-ping &&\
    apt-get clean &&\
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN docker-php-ext-install intl

ENV CONFIG config

RUN a2enmod rewrite
COPY ${CONFIG}/sites-enabled/default.conf /etc/apache2/sites-enabled/000-default.conf

RUN echo "assert.exception=1" >> /usr/local/etc/php/php.ini

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename composer \
    && php -r "unlink('composer-setup.php');"

RUN mkdir -p /var/www/project
WORKDIR /var/www/project
