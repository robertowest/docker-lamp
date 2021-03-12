FROM php:7.2.7-fpm-alpine3.7

RUN apk update; \
    apk upgrade;

RUN docker-php-ext-install mysqli pdo_mysql

# instalación de XDebug
# - instalamos dependencias 
# - instalamos xdebug
# - quitamos dependencias para mantener la imagen pequeña
RUN apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
    && pecl install xdebug-3.0.0 \
    && docker-php-ext-enable xdebug \
    && apk del -f .build-deps
# copiamos el archivo de configuración de xdebug
# COPY xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
# agregamos configuraciones a xdebug
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.client_port=9000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
