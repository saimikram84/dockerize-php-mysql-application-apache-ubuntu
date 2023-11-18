#Ubunto file
FROM  php:7.4-apache
# Ubunto Install git 
RUN apt-get update \
    && apt-get install -y git
#Install php extension
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite 
# Download and install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Verify Composer installation
RUN composer --version
#copy code from php source
COPY src/ /var/www/html
EXPOSE 80