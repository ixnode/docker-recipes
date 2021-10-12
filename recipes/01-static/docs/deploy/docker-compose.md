# Run docker image with Docker Compose

* @see: [Build and pull your own ready-to-use image](../../build/README.md)
* @see: https://docs.docker.com/compose/

## 1. Quick use

Run docker container with Docker Compose.

### Check out the project

```bash
❯ git clone https://github.com/ixnode/docker-recipes.git && \
  cd docker-recipes/recipes/01-static
```

### Copy the .env file and customize it according to your needs

```bash
❯ cp .env.dist .env
```

### Start Containers and install libraries

```bash
# start container
❯ cd build
❯ docker-compose up -d
```

### Open project in browser

* http://localhost:8000

## 2. Use your own docker-compose.yml

Copy the docker-compose.yml and all its used configuration files directly
from the repository and customize them to your needs:

* https://github.com/ixnode/docker-recipes/blob/main/recipes/01-static/build/docker-compose.yml

Start the container and install the dependencies as in the previous chapter.
