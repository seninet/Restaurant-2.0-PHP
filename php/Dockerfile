FROM php:8.0-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

# CMD sed-i "s/80/$PORT/g"/etc/apache2/sites-available/000-default.conf/etc/apache2/ports.conf && docker-php-entrypoint apache2-foreground