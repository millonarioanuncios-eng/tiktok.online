FROM php:8.2-apache
COPY . /var/www/html/
RUN mkdir -p /var/www/html/datos && chmod -R 777 /var/www/html/datos
EXPOSE 80
