# LOKI LWIN ASSIGNMENT PHP ECOSYSTEM

## Run the Containers
Run with below command:
```bash
docker-compose up -d --build
```
Create Database
```bash
Access to http://localhost:9999/ (Phpmyadmin) and create 'loki_php' database
```
Access Laravel Container
```bash
docker exec -it laravel /bin/bash
```
Install Packages
```bash
composer install
```
Generate App Key
```bash
php artisan key:generate
```
Database Migration
```bash
php artisan migrate
```
Seeding
```bash
php artisan db:seed
```

## Stop the Containers
Stop with below command:
```bash
docker-compose down
```

Stop and remove all containers, networks, and all images used by any service, use the command:
```bash
docker-compose down --rmi all
```

## Open
```bash
Laravel                                = 127.0.0.1:9000
```
```bash
PhpMyadmin                             = 127.0.0.1:7000
```
```bash
MySql                                  = 127.0.0.1:3308
```
<p align="center">
<kbd>
    <img src="https://github.com/lwinmoethu25/loki-lwin-php/blob/master/screenshot/docker_desktop.PNG" width="500">
</kbd>
<br>
<kbd>
    <img src="https://github.com/lwinmoethu25/loki-lwin-php/blob/master/screenshot/sign_up.PNG" width="500">
</kbd>
<br>
<kbd>
    <img src="https://github.com/lwinmoethu25/loki-lwin-php/blob/master/screenshot/home_page.PNG" width="500">
</kbd>
<br>
<kbd>
    <img src="https://github.com/lwinmoethu25/loki-lwin-php/blob/master/screenshot/cart.PNG" width="500">
</kbd>
<br>
<kbd>
    <img src="https://github.com/lwinmoethu25/loki-lwin-php/blob/master/screenshot/db.PNG" width="500">
</kbd>
<br>
</p>