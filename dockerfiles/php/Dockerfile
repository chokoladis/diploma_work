FROM node:25.2.1-alpine AS node_build
LABEL org.opencontainers.image.authors="github@chokoladis"

WORKDIR /var/www/redmouse

COPY package*.json ./

RUN npm install npm@11.6.2 -g && npm install npm@11.6.2

RUN npm ci

COPY . .
#RUN npm run build

FROM php:8.4-fpm-alpine

WORKDIR /var/www/redmouse

COPY ./dockerfiles/php/conf/fpm.conf /usr/local/etc/php-fpm.d/www.conf

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV PATH="$PATH:/usr/local/bin"

COPY --from=node_build /var/www/redmouse .

RUN set -eux; \
    apk add --virtual .build-deps \
            autoconf \
            build-base \
            linux-headers \
            zlib-dev \
            libzip-dev \
            oniguruma-dev \
            icu-dev \
            libxml2-dev \
            curl-dev && \
    apk add --no-cache postgresql-dev \
        bash \
        libzip \
        zlib \
        icu-libs \
        libxml2 \
        curl; \
    docker-php-ext-install \
        pdo \
        pdo_pgsql \
        pgsql \
        mbstring \
        bcmath \
        intl \
        opcache \
        sockets \
        curl; \
    docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && \
    apk del .build-deps; \
    apk add --no-cache ca-certificates && update-ca-certificates