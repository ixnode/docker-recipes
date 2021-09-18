# 01) Serve static pages

This recipe serves static HTML pages.

## Used Docker images

* [nginx](https://hub.docker.com/_/nginx): `nginx:latest`

## Quick execution

```bash
❯ git clone https://github.com/ixnode/docker-recipes.git && cd docker-recipes/recipes/01-static
❯ docker-compose up -d
```

Open http://localhost:8000/.

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
❯ docker-compose exec web bash
```

### Restart container:

```bash
❯ docker-compose restart
```

### Shutdown container:

```bash
❯ docker-compose down
```

