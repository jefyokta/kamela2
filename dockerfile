FROM php:8.3-cli
RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    unzip \
    curl \
    libssl-dev \
    libcurl4-openssl-dev \
    libpng-dev \
    libzip-dev \
    nodejs \
    && docker-php-ext-install pdo pdo_mysql zip bcmath sockets \
    && pecl install openswoole && docker-php-ext-enable openswoole \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /app

COPY . .
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# RUN composer install


CMD ["php","okta","start"]