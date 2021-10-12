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

### Exposing Pods, start deployment and service

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
```

### Open project in browser

* http://localhost:8000

### Deleting Pods, deployment and service

```bash
❯ kubectl delete -f kubernetes.yml
```

## 2. Use your own kubernetes.yml configuration file

Copy the kubernetes.yml directly from the repository and
customize them to your needs:

* https://github.com/ixnode/docker-recipes/blob/main/recipes/01-static/build/kubernetes.yml

Start the pods and services as in the previous chapter.
