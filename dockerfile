FROM php:8.5.5-apache
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    libpng-dev \
    libicu-dev \
    libonig-dev \
    libxml2-dev \
  && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY composer.json composer.lock /var/www/html/
RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]

