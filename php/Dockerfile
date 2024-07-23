FROM php:8.2-fpm

# Install the PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

# Enable the PDO MySQL extension
RUN docker-php-ext-enable pdo_mysql

# Install vim
RUN apt-get update && apt-get install -y vim