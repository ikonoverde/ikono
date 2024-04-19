FROM laravelphp/vapor:php83

RUN docker-php-ext-install calendar

RUN apt-get update && ... \
    apt-get install -y libwebp-dev && \
    docker-php-ext-configure gd --with-webp;

COPY . /var/task
