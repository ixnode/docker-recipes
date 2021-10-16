# ===========================================
# A Dockerfile to build the app (04-multi)
#
# @author Björn Hempel <bjoern@hempel.li>
# @version 1.0 (2021-10-16)
# ===========================================

# ===========================================
# MIT License
#
# Copyright (c) 2021 Björn Hempel <bjoern@hempel.li>
#
# Permission is hereby granted, free of charge, to any person obtaining a copy
# of this software and associated documentation files (the "Software"), to deal
# in the Software without restriction, including without limitation the rights
# to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
# copies of the Software, and to permit persons to whom the Software is
# furnished to do so, subject to the following conditions:
#
# The above copyright notice and this permission notice shall be included in all
# copies or substantial portions of the Software.
#
# THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
# IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
# FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
# AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
# LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
# OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
# SOFTWARE.
# ===========================================

# ===========================================
#
# Change directory:
# -----------------
# ❯ cd recipes/04-multi
#
# Check version:
# --------------
# ❯ cat VERSION
#
# Build the app:
# --------------
# ❯ docker build -t ixnode/docker-recipes-04-multi:$(cat VERSION) -t ixnode/docker-recipes-04-multi:latest -f build/Dockerfile .
# ❯ docker image ls
#
# Push the app to docker hub:
# ---------------------------
# ❯ docker login -u [username]
# ❯ docker push ixnode/docker-recipes-04-multi:$(cat VERSION)
# ❯ docker push ixnode/docker-recipes-04-multi:latest
#
# ===========================================

# Use composer:latest to build the app
FROM composer:latest as builder

# Set working dir
WORKDIR /app

# Add html folder to app folder
COPY ./html/composer.* ./

# Composer install
RUN composer install

# Use PHP 8.0.11 FPM as data container (needs rw access to data)
FROM php:8.0.11-fpm as app

# Working dir
WORKDIR /var/www/web

# Add html folder to web folder
COPY ./html /var/www/web

# Add configs to nginx
COPY ./docker/php/conf.d/config.ini /usr/local/etc/php/conf.d/config.ini

# Copy built vendor directory inside this app image
COPY --from=builder /app/vendor /var/www/web/vendor
