# PHP gRPC Demo project "Url shortener"

This is example implementation of [gRPC](https://grpc.io/) 
server and client on [PHP](https://www.php.net/), framework [Symfony](https://symfony.com/). 

This project is an addition to the article [https://igancev.ru/2023-08-14-grpc-server-on-symfony](https://igancev.ru/2023-08-14-grpc-server-on-symfony)

![symfony + grpc = love](./symfony-grpc.png)

## Run

### Start gRPC server

```bash
docker-compose up -d
```

### Run gRPC client

```
docker-compose exec rr bin/console shortener:shorten
```

Bye, bye! 🤚