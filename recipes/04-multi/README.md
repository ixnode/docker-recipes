# 04) Serve dynamic Composer PHP pages with multi-stage builds

This docker recipe serves dynamic Composer PHP pages with multi-stage builds. The build docker image then can be
executed without `composer install` container. All required PHP libraries are included in the image. That's the
difference to [03) Serve dynamic Composer PHP pages](../03-composer/README.md). See:

* [Use multi-stage builds](https://docs.docker.com/develop/develop-images/multistage-build/)
* [Dockerfile](build/Dockerfile)

## Used Docker images

* [Official build of Nginx](https://hub.docker.com/_/nginx): `nginx:latest`
* [Official build of PHP](https://hub.docker.com/_/php): `php:8.0.11-fpm` (FastCGI Process Manager)
* [Official build of composer](https://hub.docker.com/_/composer) `composer:latest`

## Quick execution (development mode)

Change to folder `recipes/04-multi`:

```bash
❯ git clone https://github.com/ixnode/docker-recipes.git && \
  cd docker-recipes/recipes/04-multi
```

Check the content of the `docker-compose.yml`:

* * [docker-compose.yml](docker-compose.yml)

Change the content of the `recipes/04-multi/html` folder to your needs or use the
example inside. Start the Docker container after that:

```bash
❯ docker-compose up -d
```

Open http://localhost:8000/ to see your content. At any time after starting the
container, the content within the folder `recipes/04-multi/html` folder can be
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
