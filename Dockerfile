FROM php:8.3-apache

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia el código fuente de la aplicación al contenedor
COPY . /var/www/html/

# Establece los permisos adecuados
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expone el puerto 80 para Apache
EXPOSE 80

# Comando para ejecutar Apache
CMD ["apache2-foreground"]
