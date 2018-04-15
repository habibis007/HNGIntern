FROM php:7.0-apache

# Set the working directory to /app
WORKDIR /app

# Copy the current directory contents into the container at /app
ADD . /var/www/html/
