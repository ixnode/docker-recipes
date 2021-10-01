# 01) Serve static pages

This docker recipe serves static HTML pages.

## Used Docker images

* [nginx](https://hub.docker.com/_/nginx): `nginx:latest`

## Quick execution (development mode)

```bash
❯ git clone https://github.com/ixnode/docker-recipes.git && \
  cd docker-recipes/recipes/01-static
```

Check the content of the `docker-compose.yml`:

* https://github.com/ixnode/docker-recipes/blob/main/recipes/01-static/docker-compose.yml

Change the content of the `recipes/01-static/html` folder to your needs or use the
example inside. Start the Docker container after that:

```bash
❯ docker-compose up -d
```

Open http://localhost:8000/ to see your content. At any time after starting the
container, the content within the folder `recipes/01-static/html` folder can be
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
