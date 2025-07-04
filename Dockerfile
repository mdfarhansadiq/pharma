FROM php:8.1-apache

# Enable mod_rewrite for clean URLs
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy your app code
COPY web/ /var/www/html/

# Setup .htaccess and Apache config
COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Expose Koyeb port
ENV PORT=8000
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
EXPOSE ${PORT}

CMD ["apache2-foreground"]
