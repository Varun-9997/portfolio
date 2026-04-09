FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git curl unzip libzip-dev zip \
    && docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs

RUN npm install && npm run build

# Fix permissions
RUN chmod -R 775 storage bootstrap/cache

# Clear Laravel cache
RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear

EXPOSE 10000

CMD php -S 0.0.0.0:10000 -t public