# 02) Serve dynamic PHP pages

This docker recipe serves dynamic PHP pages.

## Used Docker images

* [Official build of Nginx](https://hub.docker.com/_/nginx): `nginx:latest`
* [Official build of PHP](https://hub.docker.com/_/php): `php:8.0.10-fpm` (FastCGI Process Manager)

## Quick execution

Change to folder `recipes/02-php`:

```bash
❯ git clone https://github.com/ixnode/docker-recipes.git && cd docker-recipes/recipes/02-php
```

Change the content of the `html` folder to your needs or use the example inside. Start the Docker containers after that:

```bash
❯ docker-compose up -d
```

Open http://localhost:8000/ to see your content.

## Commands

### Start app

```bash
❯ docker-compose up -d
```

### Show containers

```bash
❯ docker container ls
```

### Login into container

```bash
❯ docker-compose exec web bash
❯ docker-compose exec php bash
```

### Restart container:

```bash
❯ docker-compose restart
```

### Shutdown container:

```bash
❯ docker-compose down
```
