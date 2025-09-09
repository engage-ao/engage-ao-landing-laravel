# Estágio de build
FROM php:8.3-fpm

# Instalar dependências necessárias
RUN apt-get update && apt-get install -y \
    nginx \
    supervisor \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql gd zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www/html

COPY . /var/www/html

# Configurar Nginx
RUN mkdir -p /var/www/html \
    && mkdir -p /var/log/nginx \
    && mkdir -p /var/run/nginx \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Copiar arquivos de configuração
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Configurar permissões
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Instalar dependências do Composer
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Expor porta
EXPOSE 80

# Comando de inicialização
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]