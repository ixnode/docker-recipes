# recipes/01-static/Dockerfile

# Use last nginx image
FROM nginx:latest

# Working dir
WORKDIR /var/www/web

# Add html folder to web folder
COPY ./html /var/www/web

# Add configs to nginx
COPY ./docker/nginx/conf.d/site.conf /etc/nginx/conf.d/default.conf