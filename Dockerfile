FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    zip unzip git libpng-dev libonig-dev libxml2-dev curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-interaction --prefer-dist --optimize-autoloader

RUN chmod -R 777 storage bootstrap/cache

RUN a2enmod rewrite
COPY ./docker/apache/laravel.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
CMD ["apache2-foreground"]
