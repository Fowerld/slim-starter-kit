# Slim starter kit
A [Slim framework 3](https://www.slimframework.com/) starter kit.

## How to use ?

- Clone this project
```cmd
git clone https://github.com/cokadev/slim-starter-kit.git
cd slim-starter-kit
```

- Install dependencies with composer
```cmd
composer install
```

- Start localhost web server, assuming `./public/` is public-accessible directory with `index.php` file:  
```cmd
php -S localhost:8888 -t public public/index.php
```
You will see `"Hello World!"`.

## Scripts

- PHPCS : configured for PSR-2
```cmd
composer test:phpcs
```

- PHPCBF : Fix PSR-2 violations automatically
```cmd
composer fix:phpcbf
```
