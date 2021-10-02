# Useful docker commands

## Start app

```bash
❯ docker-compose up -d
```

## Show logs

```bash
❯ docker-compose logs -f
```

## Show container

```bash
❯ docker container ls
```

## Login into containers

```bash
# If a nginx container exists
❯ docker-compose exec nginx bash

# If a php container exists
❯ docker-compose exec php bash

# etc.
```



## Restart, stop and start container:

```bash
❯ docker-compose restart
❯ docker-compose stop
❯ docker-compose start
```

## Shutdown container:

```bash
❯ docker-compose down
```
