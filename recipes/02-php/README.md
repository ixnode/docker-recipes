# 02) Serve dynamic PHP pages

This docker recipe serves dynamic PHP pages.

## Used Docker images

* [Official build of Nginx](https://hub.docker.com/_/nginx): `nginx:latest`
* [Official build of PHP](https://hub.docker.com/_/php): `php:8.0.11-fpm` (FastCGI Process Manager)


## Quick execution (development mode)

Change to folder `recipes/02-php`:

```bash
❯ git clone https://github.com/ixnode/docker-recipes.git && \
  cd docker-recipes/recipes/02-php
```

Check the content of the `docker-compose.yml`:

* * [docker-compose.yml](docker-compose.yml)

Change the content of the `recipes/02-php/html` folder to your needs or use the
example inside. Start the Docker container after that:

```bash
❯ docker-compose up -d
```

Open http://localhost:8000/ to see your content. At any time after starting the
container, the content within the folder `recipes/02-php/html` folder can be
changed. The changes are visible immediately after reloading the browser.

## Useful commands

@see: [Useful docker commands](../../docs/commands.md)

## Other tasks

### Build new image

* [Build, pull and run your own and ready-to-use image](build/README.md)

### Using the image

* [Run docker image with Docker Compose](docs/deploy/docker-compose.md)
* [Deploy docker image with Docker Compose and Traefik](docs/deploy/docker-compose.traefik.md)
* [Deploy docker image to Kubernetes](docs/deploy/kubernetes.md)
