
# copy enviroment configuration file
```
cp .env.example .env //git bash
```

# config database

# install dependencies
composer install

# generate laravel app key
php artisan key:generate

# laravel server with default port 8000
php artisan serve

# generate model with migration

php artisan make:model Product --migration

# run migaration
php artisan migrate

# add controller with resource
php artisan make:controller ProductController -r

# list route
php artisan route:list