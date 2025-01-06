

FROM php:8.0-apache


RUN docker-php-ext-install mysqli pdo pdo_mysql


COPY ./src/ /var/www/html/


RUN a2enmod rewrite


ENV MYSQL_HOST mysql-service
ENV MYSQL_USER testuser
ENV MYSQL_PASSWORD testpassword
ENV MYSQL_DATABASE testdb


EXPOSE 80
