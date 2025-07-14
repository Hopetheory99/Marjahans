FROM wordpress:php8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install zip mysqli && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
