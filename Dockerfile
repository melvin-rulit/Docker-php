FROM php:7.4-apache

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    zlib1g-dev \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    git

# Установка расширения Mysql
RUN docker-php-ext-install mysqli pdo_mysql zip

# Установка SQLite3 и необходимые библиотеки
RUN apt-get update \
    && apt-get install -y sqlite3 libsqlite3-dev \
    && docker-php-ext-install pdo_sqlite

# Install MySQL client
RUN apt-get update && apt-get install -y mariadb-client

# Установка расширения GD
RUN apt-get update \
    && apt-get install -y libpng-dev \
    && docker-php-ext-install gd

# Install Node.js and npm (setup_14.x node -v 14.21.3 npm -v 6.14.18 if setup_20.x node -v 20.5.1 npm -v 9.8.0)
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs    
    
# Install Composer рабочий вариант
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Устанавливаем права на папку db чтобы файл .sqlite был виден
RUN chmod -R 777 /var/www/html/db
