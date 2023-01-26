FROM php:7.4.10-fpm
RUN set -ex; \
    \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        libjpeg-dev \
        libpng-dev \
        libfreetype6-dev \
        libzip-dev \
        nginx \
        supervisor \
        gnupg \
        subversion \
        git \
    ; \
    \
    docker-php-ext-configure gd --with-freetype --with-jpeg; \
    docker-php-ext-install gd mysqli zip; \
    \
    rm -rf /var/lib/apt/lists/*

# Configure nginx
COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf
COPY ./nginx/conf /etc/nginx
COPY ./nginx/nginx.conf /etc/nginx/nginx.conf

# Configure supervisord
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Custom PHP configurations
COPY ./php.ini /usr/local/etc/php

COPY ./app/dist /var/www/html/dist
COPY ./app/vendor /var/www/html/vendor

WORKDIR /var/www/html/dist

RUN chown -R www-data:www-data /var/www/html/dist
RUN find . -type d -exec chmod 755 {} \;
RUN find . -type f -exec chmod 644 {} \;

EXPOSE 80 443
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
