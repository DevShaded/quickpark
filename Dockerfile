FROM php:8.4-fpm

# Install required dependencies for PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    libzip-dev \
    libcurl4-openssl-dev \
    libicu-dev \
    libssl-dev \
    zlib1g-dev \
    git \
    unzip \
    libonig-dev \
    && apt-get clean

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip
RUN docker-php-ext-install xml
RUN docker-php-ext-install curl
RUN docker-php-ext-install opcache
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install fileinfo
RUN docker-php-ext-install dom

# Enable PHP extensions
RUN docker-php-ext-enable opcache

# Set the working directory
WORKDIR /var/www/html

# Copy composer.json and composer.lock
COPY composer.json composer.lock ./

# Install Composer dependencies
RUN composer install --no-autoloader --no-scripts

# Copy the application code
COPY . .

# Optimize autoloading
RUN composer dump-autoload --optimize

FROM node:20

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the package.json and package-lock.json (if available)
COPY /package.json /package-lock.json ./

# Install npm dependencies
RUN npm install

# Expose SSR port
EXPOSE 13714

# Copy the rest of the SSR files
COPY . .

# Start SSR server with pm2
CMD ["node", "ecosystem.config.js" ]
