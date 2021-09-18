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
❯ docker-compose exec nginx bash
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
## Build, pull and run ready-to-use images

### Create `Dockerfile`

Adapt the Dockerfile according to your requirements: https://docs.docker.com/engine/reference/builder/

Note the best practices for writing Docker files: https://docs.docker.com/develop/develop-images/dockerfile_best-practices/

```dockerfile
# recipes/02-php/Dockerfile

# Use PHP 8.0.10 FPM as data container (needs rw access to data)
FROM php:8.0.10-fpm

# Working dir
WORKDIR /var/www/web

# Add html folder to web folder
COPY ./html /var/www/web

# Add configs to nginx
COPY ./docker/php/conf.d/config.ini /usr/local/etc/php/conf.d/config.ini
```

### Build docker image `ixno/docker-recipes` with version `0.1.0-php`

Keep the version numbers of your application clean and tag your image accordingly (`:0.1.0-php`):

```bash
❯ docker build -t ixnode/docker-recipes:0.1.0-php .
❯ docker image ls
```

### Push docker image `ixno/docker-recipes` to docker hub

```bash
❯ docker login -u [username]
❯ docker push ixnode/docker-recipes:0.1.0-php
```

### Run docker container with Docker Compose

* @see: https://docs.docker.com/compose/
* @see: https://docs.docker.com/compose/compose-file/compose-file-v3/#volume-configuration-reference (To share `/var/www/web` with Nginx Proxy)
* @container_name: `ixnode-docker-recipes-0.1.0-php-nginx` (Nginx)
* @container_name: `ixnode-docker-recipes-0.1.0-php-php` (PHP 8.0.10 FPM)
* @volume_name: `ixnode-docker-recipes-0.1.0-data` (To share `/var/www/web` with Nginx Proxy)

Create `docker-compose.yml` with the following content:

```yaml
version: "3.8"

# configure services
services:

  # Nginx to serve the app.
  nginx:
    image: "nginx:latest"
    container_name: "ixnode-docker-recipes-0.1.0-php-nginx"
    hostname: "ixnode-docker-recipes-0-1-0-php-nginx"
    restart: always
    ports:
      - 8001:80
    volumes:
      # Server static pages
      - data:/var/www/web
      # Add nginx configuration
      - ../docker/nginx/conf.d/site.conf:/etc/nginx/conf.d/default.conf
    depends_on:
      - php

  # Use ixnode/docker-recipes:0.1.0-php with the data it contains
  php:
    image: "ixnode/docker-recipes:0.1.0-php-php"
    container_name: "ixnode-docker-recipes-0.1.0-php-php"
    hostname: "ixnode-docker-recipes-0-1-0-php-php"
    restart: always
    volumes:
      - data:/var/www/web # This container shares the folder /var/www/web via volume data, because it already exists

# configure volumes
volumes:
  data:
    name: "ixnode-docker-recipes-0.1.0-data"
```

Start container:

```bash
❯ docker-compose up -d
```

* @open: http://localhost:8001/.

Shutdown container:

```bash
❯ docker-compose down 
```

### Deploy container with with Docker Compose and Traefik

* @see: https://doc.traefik.io/traefik/user-guides/docker-compose/basic-example/

Tbd.

### Deploy container to Kubernetes

* @see: https://docs.docker.com/get-started/kube-deploy/

Tbd.
