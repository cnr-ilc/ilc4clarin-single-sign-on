# Use a base image with PHP and Apache
FROM php:7.3.13-apache

# Set the Apache document root
ENV APACHE_DOCUMENT_ROOT /code/www

# Update and install dependencies
RUN apt-get update && apt-get install -y --no-install-recommends \
  apt-transport-https \
  ca-certificates \
  curl \
  gnupg \
  git \
  libmemcached-dev \
  libpng-dev \
  unzip \
  zlib1g-dev \
  libcurl4-openssl-dev \
  libssl-dev \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install -j5 gd mbstring mysqli pdo pdo_mysql

# Install PECL extensions memcached and redis
RUN pecl install memcached redis && \
    docker-php-ext-enable memcached redis

# Manually install Xdebug
RUN curl -L https://xdebug.org/files/xdebug-2.9.8.tgz -o xdebug.tgz && \
    tar -xvzf xdebug.tgz && \
    rm xdebug.tgz && \
    cd xdebug-2.9.8 && \
    phpize && \
    ./configure && \
    make && \
    make install && \
    cd .. && \
    rm -rf xdebug-2.9.8 && \
    echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configure Apache
RUN a2dismod mpm_event && a2enmod mpm_prefork

# Copy Apache configuration files
COPY apache2.conf /etc/apache2/
COPY mpm_prefork.conf /etc/apache2/mods-available/

# Copy the startup script
COPY startup.sh /

# Ensure the startup script has executable permissions
RUN chmod +x /startup.sh

# Set the default command to run the startup script
CMD ["/startup.sh"]

# Default command to start PHP server if ENTRYPOINT is overridden
CMD ["php", "-S", "0.0.0.0:8732", "-t", "/code/www"]
