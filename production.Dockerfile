FROM laravelphp/vapor:php83

RUN docker-php-ext-install calendar

RUN docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install gd

COPY . /var/task
