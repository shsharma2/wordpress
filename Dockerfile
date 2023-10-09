# Use an official WordPress image as the base image
FROM wordpress:latest

# Copy your WordPress files into the container
COPY . /var/www/html

# Copy your WordPress config file into the container
COPY wp-config.php /var/www/html/wp-config.php

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80