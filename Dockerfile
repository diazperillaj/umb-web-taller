# Usar PHP 8.2 con Apache
FROM php:8.2-apache

# Copiar la API a /var/www/html
COPY api/ /var/www/html/

# Habilitar mod_rewrite (opcional)
RUN a2enmod rewrite

# Exponer el puerto
EXPOSE 80
