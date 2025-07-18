# Gunakan base image PHP 8.2 FPM
FROM php:8.2-fpm

# Install dependensi yang dibutuhkan oleh Laravel
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libonig-dev \
    libxml2-dev \
    libzip-dev

# Install ekstensi PHP yang dibutuhkan Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Salin semua file proyek ke dalam container
COPY . .

# Install dependensi Composer
RUN composer install --no-scripts --no-autoloader --no-dev --prefer-dist
RUN composer dump-autoload --no-scripts --optimize

# Jalankan perintah-perintah Artisan
RUN php artisan config:clear
RUN php artisan view:clear
RUN php artisan route:clear
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port untuk server
EXPOSE 8000

# Perintah untuk menjalankan server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]