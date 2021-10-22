# Build and pull your own ready-to-use image

The following built image is a ready-to-use image and contains all data
necessary for the operation of the app (source code of the app).

| Name                     | Value                                    |
|--------------------------|------------------------------------------|
| **Image name**           | `ixnode/docker-recipes-01-static:latest` |
| **Image name** (example) | `ixnode/docker-recipes-01-static:0.1.0`  |
| **Dockerfile**           | `build/Dockerfile`                       |

### Check out the project

```bash
❯ git clone https://github.com/ixnode/docker-recipes.git && \
  cd docker-recipes/recipes/01-static
```

### Check or change version

Increase the version number according to your needs: `<MAJOR>`.`<MINOR>`.`<PATCH>`

| Name  | Description                                                                               |
|-------|-------------------------------------------------------------------------------------------|
| MAJOR | is increased when API incompatible changes are released.                                  |
| MINOR | is increased when new functionality that is compatible with the previous API is released. |
| PATCH | is increased when changes include API-compatible bug fixes only.                          |

* @see: https://semver.org/lang/de/

```bash
❯ cat VERSION
0.1.0
```

### Build and pull ready-to-use image

Before building the image, please check that all unneeded files (cache, vendor,
dist configurations, etc.) are not packaged with (@see `.dockerignore`):

```bash
❯ docker build \
  -t ixnode/docker-recipes-01-static:$(cat VERSION) \
  -t ixnode/docker-recipes-01-static:latest \
  -f build/Dockerfile .
❯ docker image ls
```

### Push the app to docker hub

```bash
❯ docker login -u [username]
❯ docker push ixnode/docker-recipes-01-static:$(cat VERSION)
❯ docker push ixnode/docker-recipes-01-static:latest
```

### Check the images in the repository

* https://hub.docker.com/repository/docker/ixnode/docker-recipes

### Using the image

* [Run docker image with Docker Compose](../docs/deploy/docker-compose.md)
* [Deploy docker image with Docker Compose and Traefik](../docs/deploy/docker-compose.traefik.md)
* [Deploy docker image to Kubernetes](../docs/deploy/kubernetes.md)
