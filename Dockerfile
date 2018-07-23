FROM php:7-cli

RUN pecl install xdebug-2.6.0 \
    && docker-php-ext-enable xdebug
RUN echo "[xdebug]" >> /usr/local/etc/php/conf.d/xdebug-dev.ini \
    && echo "xdebug.default_enable=1" >> /usr/local/etc/php/conf.d/xdebug-dev.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/xdebug-dev.ini \
    && echo "; remote_connect_back is not safe in production!" >> /usr/local/etc/php/conf.d/xdebug-dev.ini \
    && echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/xdebug-dev.ini \
    && echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/xdebug-dev.ini \
    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/xdebug-dev.ini \
    && echo "xdebug.idekey=PHPSTORM" >> /usr/local/etc/php/conf.d/xdebug-dev.ini