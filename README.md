# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Set Connection DB In .env file
``` php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jojo-db # example name db
DB_USERNAME=root    # example db username
DB_PASSWORD= 
```
## Migrate DB
After set connection database. Open terminal and type `php artisan migrate` for generate database then type `php artisan db:seed` for generate seeder migration.

## Testing API IN LOCAL
after migration database, open terminal and type :
``php -S localhost:8000 -t ./public``

```json
PHP 7.3.7 Development Server started at Sun Aug 23 22:03:47 2020
Listening on http://localhost:8000
Document root is C:\xampp\htdocs\jojo-flight-api\public
Press Ctrl-C to quit.
```
and type ``http://localhost:8000``
if success will be return :
```json
    {
    "success": true,
    "result": "Welcome to jojo-flight-api"
    }
```

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
