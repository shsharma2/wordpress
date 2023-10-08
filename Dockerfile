# Use an official WordPress image as the base image
FROM wordpress:latest

# Copy your WordPress files into the container
COPY . /var/www/html

# Copy your WordPress config file into the container
COPY wp-config-sample.php /var/www/html/wp-config-sample.php
