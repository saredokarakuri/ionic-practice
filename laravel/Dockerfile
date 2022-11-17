FROM php:8.1.5-apache

ADD 000-default.conf /etc/apache2/sites-enabled/

RUN cd /usr/bin \
    && curl -s http://getcomposer.org/installer | php -- --version=2.3.5\
    && ln -s /usr/bin/composer.phar /usr/bin/composer

RUN apt-get update \
    && apt-get install -y \
        git \
        zip \
        unzip \
        vim \
        libpng-dev \
        libpq-dev \
        zlib1g-dev \
        libjpeg-dev \
        libfreetype6-dev \
    && docker-php-ext-install \
        pdo_mysql \
        sockets \
        -j$(nproc) \
        gd

RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite
