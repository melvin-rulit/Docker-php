# Install and Set Up Project with Docker Compose

Setting up project in the local environment with Docker using the LEMP stack that includes: Nginx, (MySQL SQLite PostgreSQL), PHP, and phpMyAdmin or pgAdmin.

## Why use Docker for Development

- [x] Consistent development environment for the entire team.
- [x] You don't need to install a bunch of language environments on your system.
- [x] You can use different versions of the same programming language.
- [x] Deployment is easy

## How to Install and Run the Project

1. ``` git clone git@github.com:melvin-rulit/Docker-php.git ```
2. ``` docker-compose exec app composer install ```
3. Editing  the ```.env``` file with your settings
4. ```docker-compose build```
5. ```docker compose up -d```
6. You can see the project on ```127.0.0.1:9904```

