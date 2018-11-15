FROM php:7-fpm-alpine

RUN apk add --update nginx
RUN docker-php-ext-install pdo pdo_mysql

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

COPY . /app

WORKDIR /app

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN composer install

RUN mv docker/php/docker-php-entrypoint /usr/local/bin/docker-php-entrypoint
RUN mv docker/php/php.ini /usr/local/etc/php/conf.d/php.ini

CMD ["php-fpm"]
