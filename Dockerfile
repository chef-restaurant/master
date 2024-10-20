FROM wordpress:latest

# Copy your WordPress source code to the image
COPY . /var/www/html

# Ensure correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for the web server
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
