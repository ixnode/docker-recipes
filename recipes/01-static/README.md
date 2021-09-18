# 01) Serve static pages

This docker recipe serves static HTML pages.

## Used Docker images

* [nginx](https://hub.docker.com/_/nginx): `nginx:latest`

## Quick execution

Change to folder `recipes/01-static`:

```bash
❯ git clone https://github.com/ixnode/docker-recipes.git && cd docker-recipes/recipes/01-static
```

Change the content of the `html` folder to your needs or use the example inside. Start the Docker container after that:

```bash
❯ docker-compose up -d
```

Open http://localhost:8000/ to see your content.

## Commands

### Start app

```bash
❯ docker-compose up -d
```

### Show container

```bash
❯ docker container ls
```

### Login into container

```bash
❯ docker-compose exec nginx bash
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
# recipes/01-static/Dockerfile

# Use last nginx image
FROM nginx:latest

# Working dir
WORKDIR /var/www/web

# Add html folder to static folder
COPY ./html /var/www/web

# Add configs to nginx
COPY ./docker/nginx/conf.d/site.conf /etc/nginx/conf.d/default.conf
```

### Build docker image `ixno/docker-recipes` with version `0.1.0-static`

Keep the version numbers of your application clean and tag your image accordingly (`:0.1.0-static`):

```bash
❯ docker build -t ixnode/docker-recipes:0.1.0-static .
❯ docker image ls
```

### Push docker image `ixno/docker-recipes` to docker hub

```bash
❯ docker login -u [username]
❯ docker push ixnode/docker-recipes:0.1.0-static
```

### Run docker container directly

* @see: https://docs.docker.com/engine/reference/run/
* @container_name: `ixnode-docker-recipes-0.1.0-static`

```bash
❯ docker run \
  -dit \
  -p 8001:80 \
  --name ixnode-docker-recipes-0.1.0-static \
  ixnode/docker-recipes:0.1.0-static
```

* @open: http://localhost:8001/.

To remove the previously created container, use:

```bash
❯ docker container stop ixnode-docker-recipes-0.1.0-static && docker container rm ixnode-docker-recipes-0.1.0-static
```

### Run docker container with Docker Compose

* @see: https://docs.docker.com/compose/
* @container_name: `ixnode-docker-recipes-0.1.0-static`

Create `docker-compose.yml` with the following content:

```yaml
# ❯ cd recipes/01-static
# ❯ mkdir docker_compose && cd docker_compose
# ❯ vi docker-compose.yml

version: "3.8"

# configure services
services:

  # Use ixnode/docker-recipes:0.1.0-static image (originated from image nginx:latest) with the data it contains
  nginx:
    image: "ixnode/docker-recipes:0.1.0-static"
    container_name: "ixnode-docker-recipes-0.1.0-static"
    hostname: "ixnode-docker-recipes-0-1-0-static"
    restart: always
    ports:
      - 8001:80
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
