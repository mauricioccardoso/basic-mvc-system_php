FROM php:8.2-cli

RUN apt-get update && apt-get install -y wget netcat-openbsd git unzip

#RUN #wget -q -O /usr/bin/wait-for https://raw.githubusercontent.com/eficode/wait-for/v2.2.3/wait-for && \
#    chmod +x /usr/bin/wait-for

RUN docker-php-ext-install mysqli

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"

RUN useradd -u 1000 -ms /bin/bash php

USER php

WORKDIR /home/php/backend

COPY ./.bash_aliases /home/php/
COPY ./start.sh      /usr/local/bin

EXPOSE 8081

CMD [ "/usr/local/bin/start.sh" ]