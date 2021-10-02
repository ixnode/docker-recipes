# 02) Serve dynamic PHP pages

This docker recipe serves dynamic PHP pages.

## Used Docker images

* [Official build of Nginx](https://hub.docker.com/_/nginx): `nginx:latest`
* [Official build of PHP](https://hub.docker.com/_/php): `php:8.0.11-fpm` (FastCGI Process Manager)

## Quick execution (development mode)

Change to folder `recipes/02-php`:

```bash
❯ git clone https://github.com/ixnode/docker-recipes.git && cd docker-recipes/recipes/02-php
```

Change the content of the `html` folder to your needs or use the example inside. Start the Docker containers after that:

```bash
❯ docker-compose up -d
```

Open http://localhost:8000/ to see your content. At any time after starting the
container, the content within the folder `recipes/02-php/html` folder can be
changed. The changes are visible immediately after reloading the browser.

## Useful commands

@see: [Useful docker commands](../../docs/commands.md)

## Build and pull your own and ready-to-use images

* @see: [Build, pull and run your own and ready-to-use images](build/README.md)

## Run your own and ready-to-use image with Docker Compose

* @see: [Run your own and ready-to-use image with Docker Compose](build/docs/docker-compose.md)

## Deploy your own and ready-to-use image with Docker Compose and Traefik

* @see: [Deploy your own and ready-to-use image with Docker Compose and Traefik](build/docs/docker-compose.traefik.md)

## Deploy your own and ready-to-use image to Kubernetes

* @see: [Deploy your own and ready-to-use image to Kubernetes](build/docs/kubernetes.md)
