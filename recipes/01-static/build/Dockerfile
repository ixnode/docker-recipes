# ===========================================
# A Dockerfile to build the app (static)
#
# @author Björn Hempel <bjoern@hempel.li>
# @version 1.0 (2021-10-01)
# ===========================================

# ===========================================
#
# Change directory:
# -----------------
# ❯ cd recipes/01-static
#
# Build the app:
# --------------
# ❯ docker build -t ixnode/docker-recipes-01-static:latest -f build/Dockerfile .
# ❯ docker image ls
#
# Push the app to docker hub:
# ---------------------------
# ❯ docker login -u [username]
# ❯ docker push ixnode/docker-recipes-01-static:latest
#
# Check version:
# --------------
# ❯ cat VERSION
#
# Tag latest version:
# -------------------
# ❯ docker tag ixnode/docker-recipes-01-static:latest ixnode/docker-recipes-01-static:$(cat VERSION)
# ❯ docker image ls
# ❯ docker push ixnode/docker-recipes-01-static:$(cat VERSION)
#
# ===========================================

# Use last nginx image
FROM nginx:latest

# Working dir
WORKDIR /var/www/web

# Add html folder to static folder
COPY ./html /var/www/web

# Add configs to nginx
COPY ./docker/nginx/conf.d/site.conf /etc/nginx/conf.d/default.conf
