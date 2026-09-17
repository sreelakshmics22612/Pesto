FROM php:8.3-apache

# Install MySQL/MariaDB PHP extension
RUN docker-php-ext-install mysqli

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy Pesto project into Apache web directory
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

EXPOSE 80