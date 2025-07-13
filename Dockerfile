# Use official PHP image with Apache
FROM php:8.2-apache

# Copy website files into Apache root
COPY public/ /var/www/html/

# Expose port 80
EXPOSE 80
