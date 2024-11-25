#!/bin/sh

docker compose exec app php artisan db:seed --class=ContactsTableSeeder
docker compose exec app php artisan db:seed --class=SocialNetworkTableSeeder
docker compose exec app php artisan db:seed --class=TypesTableSeeder
docker compose exec app php artisan db:seed --class=ProjectsTableSeeder
