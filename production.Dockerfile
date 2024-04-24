FROM laravelphp/vapor:php83

RUN docker-php-ext-install calendar

COPY . /var/task
