FROM php:8.3-fpm
RUN apt-get update && apt-get install -y \
        git \
        zip \
        unzip \        
        zlib1g-dev \
        libzip-dev \
        libfreetype-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
    &&  docker-php-ext-install pdo_mysql

RUN docker-php-ext-install zip gd

#  RUN docker-php-ext-configure zlib
# RUN apt-get update && apt-get install -y libmcrypt-dev \
#     mysql-client libmagickwand-dev --no-install-recommends \
#     && pecl install imagick \
#     && docker-php-ext-enable imagick \
# && docker-php-ext-install mcrypt pdo_mysql
# RUN docker-php-ext-configure zlib
RUN pecl install redis \
   # Redis is installed, enable it
    && docker-php-ext-enable redis zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg

WORKDIR /www

COPY . /www
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# RUN php artisan migrate
RUN composer install
