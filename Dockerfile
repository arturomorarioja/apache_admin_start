FROM php:8.3-apache
RUN a2enmod rewrite && apt-get update && apt-get install -y --no-install-recommends apache2-utils && rm -rf /var/lib/apt/lists/*
