FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git curl unzip libzip-dev zip \
    && docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer install

# Install Node
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
RUN apt-get install -y nodejs

# Install & build frontend
RUN npm install
RUN npm run build

# 🔥 IMPORTANT: verify build exists
RUN ls -la public/build

# Fix permissions
RUN chmod -R 775 storage bootstrap/cache

# Clear Laravel cache
RUN php artisan config:clear
RUN php artisan route:clear
RUN php artisan view:clear
RUN php artisan optimize:clear

EXPOSE 10000

CMD php -S 0.0.0.0:10000 -t public