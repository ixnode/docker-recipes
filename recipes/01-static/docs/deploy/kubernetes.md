# Deploy your own and ready-to-use image to Kubernetes

* @see: [Build and pull your own ready-to-use image](../../build/README.md)
* @see: https://docs.docker.com/get-started/kube-deploy/

## 1. Quick use

Run docker container with Docker Compose.

### Check out the project

```bash
❯ git clone https://github.com/ixnode/docker-recipes.git && \
  cd docker-recipes/recipes/01-static
```

### Start deployment and service (exposing pods and its containers)

```bash
❯ cd build
❯ kubectl apply -f kubernetes.yml
deployment.apps/de-ixno-docker-recipes-static-deployment created
service/de-ixno-docker-recipes-static-service created
```

### Show Pods, deployments and services

```bash
❯ kubectl get events
❯ kubectl get pods
❯ kubectl get services
❯ kubectl get deployments
```

### Forward cluster port to localhost

_Optional_, e.g. when working locally:

```bash
❯ kubectl port-forward service/de-ixno-docker-recipes-static-service 8000:8000
Forwarding from 127.0.0.1:8000 -> 80
Forwarding from [::1]:8000 -> 80
Handling connection for 8000
...
```

or when using minikube

```bash
❯ minikube tunnel
* Starting tunnel for service de-ixno-docker-recipes-static-service.
```

### Open project in browser

```bash
❯ kubectl get svc
NAME                                    TYPE           CLUSTER-IP       EXTERNAL-IP   PORT(S)          AGE
de-ixno-docker-recipes-static-service   LoadBalancer   10.109.246.104   127.0.0.1     8000:30001/TCP   4m23s
...
```

* http://127.0.0.1:8000

```bash
❯ curl 127.0.0.1:8000
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>01-static</title>
</head>
<body>
    <h2>01-static</h2>
    <p>Hello Docker! :) This docker setup that shows how to serve static pages in docker.</p>
    <p><strong>Version</strong>: v0.1.0</p>
</body>
</html>
```

### Login into one pod

Get all pods (`de-ixno-docker-recipes-static-deployment-847c5b44c4-hll7p`)

```bash
❯ kubectl get pods
NAME                                                        READY   STATUS    RESTARTS   AGE
de-ixno-docker-recipes-static-deployment-847c5b44c4-hll7p   1/1     Running   0          2m
```

Login into container `de-ixno-docker-recipes-static-nginx` from given pod:

```bash
❯ kubectl exec -it de-ixno-docker-recipes-static-deployment-847c5b44c4-hll7p -c de-ixno-docker-recipes-static-nginx -- /bin/bash
```

### Deleting Pods, deployment and service

```bash
❯ kubectl delete -f kubernetes.yml
```

## 2. Use your own kubernetes.yml configuration file

Copy the kubernetes.yml directly from the repository and
customize them to your needs:

* https://github.com/ixnode/docker-recipes/blob/main/recipes/01-static/build/kubernetes.yml

Start the pods and services as in the previous chapter.
