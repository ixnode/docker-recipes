# recipes/02-php/Dockerfile

# Use PHP 8.0.10 FPM as data container (needs rw access to data)
FROM php:8.0.10-fpm

# Working dir
WORKDIR /var/www/web

# Add html folder to web folder
COPY ./html /var/www/web

# Add configs to nginx
COPY ./docker/php/conf.d/config.ini /usr/local/etc/php/conf.d/config.ini