# ==============================================================================
# FOOD GURU CHAKRA™ - Official Production Dockerfile for Render Deployment
# Base: PHP 8.2 with Apache + Node.js for Vite asset building
# ==============================================================================

FROM php:8.2-apache

# 1. Install System Dependencies & PHP Extension Libraries
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    ca-certificates \
    && rm -rf /var/lib/apt/lists/*

# 2. Install PHP Extensions Required by Laravel 12 & Livewire
RUN docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip \
    opcache

# 3. Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Install Node.js (v20 LTS) & NPM for Vite asset compilation
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# 5. Configure Apache DocumentRoot to Laravel's /public folder
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 6. Enable Apache mod_rewrite for Laravel Routing & AllowOverride All
RUN a2enmod rewrite \
    && sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Set Working Directory
WORKDIR /var/www/html

# 7. Copy Application Code
COPY . .

# 8. Install PHP Dependencies (No Dev)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# 9. Install Node Dependencies & Build Vite Assets (Tailwind v4)
RUN npm install && npm run build && rm -rf node_modules

# 10. Configure Directory Permissions for Storage and Cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 11. Create Startup Entrypoint Script for Dynamic $PORT Binding on Render
RUN echo '#!/bin/sh\n\
PORT_TO_USE="${PORT:-80}"\n\
sed -i "s/80/${PORT_TO_USE}/g" /etc/apache2/ports.conf /etc/apache2/sites-available/*.conf\n\
php artisan view:clear || true\n\
php artisan view:cache || true\n\
exec apache2-foreground' > /usr/local/bin/start-render.sh \
    && chmod +x /usr/local/bin/start-render.sh

# Expose Render Default Port
EXPOSE 80 10000

# 12. Start Application
CMD ["/usr/local/bin/start-render.sh"]
