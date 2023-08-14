# ./deployment/docker/roadrunner/Dockerfile

FROM php:8.2-cli-alpine

WORKDIR /app

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN install-php-extensions bcmath intl opcache zip sockets grpc protobuf

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

CMD ["/app/bin/rr", "serve", "-d", "-c", "/app/.rr.yaml"]