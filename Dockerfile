FROM php:7.4.10-cli-alpine
COPY ./pass.php /usr/src/my-pass/pass.php
WORKDIR /usr/src/my-pass
CMD [ "php", "./pass.php" ]
