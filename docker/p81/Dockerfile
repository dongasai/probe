
FROM registry.cn-zhangjiakou.aliyuncs.com/xspublic/php_cli:grpc_p81

ENV UPDATE_NUMBER=1

RUN apt-get update

WORKDIR /home

# 安装必要的扩展
RUN docker-php-ext-install bcmath mbstring zip sockets pdo pdo_mysql mysqli pcntl
RUN pecl install redis \
    && docker-php-ext-enable redis


# 安装swoole
RUN pecl install swoole && docker-php-ext-enable swoole

# 安装gd
RUN apt-get install -y wget unzip  libfreetype6-dev libmcrypt-dev libjpeg-dev libpng-dev \
    && docker-php-ext-configure gd \
             --with-freetype=/usr/include/ \
             --with-jpeg=/usr/include/ && docker-php-ext-install gd

# 安装composer
RUN wget https://mirrors.aliyun.com/composer/composer.phar \
	&& mv composer.phar /usr/local/bin/composer \
	&& chmod +x /usr/local/bin/composer && composer config -g repo.packagist composer https://packagist.pages.dev/


WORKDIR /var/www/html

