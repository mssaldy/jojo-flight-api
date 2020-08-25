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
and type ``http://localhost:8000`` in browser or postman
if success will be return :
```json
{
    "success": true,
    "result": "Welcome to jojo-flight-api"
}
```

## Register User
POST `http://localhost:8000/register`
Example:

Key               | Value
------------------| ------------------
email             | myemail@gmail.com
username          | mssaldy
password          | thepassword

if success will be return :
```json
{
    "success": true,
    "message": "Success Register"
}
```

## Login User
after register user POST `http://localhost:8000/login`
Example:

Key               | Value
------------------| ------------------
email             | myemail@gmail.com
username          | mssaldy
password          | thepassword

if success will be return :
```json
{
    "success": true,
    "api_token": "734e1d761f6d87a73b4a0434910356a568f5b159",
    "message": {
        "id": 1,
        "username": "mssaldy",
        "email": "myemail@gmail.com",
        "remember_token": null,
        "created_at": "2020-08-23T15:44:34.000000Z",
        "updated_at": "2020-08-23T15:44:34.000000Z",
        "deleted_at": null
    }
}
```
after login use this `"api_token": "734e1d761f6d87a73b4a0434910356a568f5b159"` to access api

## Sample GET Airlines 
GET ``http://localhost:8000/airlines/?api_token=734e1d761f6d87a73b4a0434910356a568f5b159``
```json
 {
    "data": [
            {
                "id": 1,
                "name_airlines": "Qantas (QF)",
                "created_at": "2020-08-23T15:43:13.000000Z",
                "updated_at": "2020-08-23T15:43:13.000000Z",
                "flight": [
                    {
                        "id": 1,
                        "user_id": 1,
                        "airline_id": 1,
                        "flightNumber": "QF400",
                        "departurePort": "MEL",
                        "arrivalPort": "SDY",
                        "departureTime": "2020-08-23 15:43:13",
                        "arrivalTime": "2020-08-24 15:43:13",
                        "created_at": "2020-08-23T15:43:13.000000Z",
                        "updated_at": "2020-08-23T15:43:13.000000Z"
                    }
                ]
           },
           {...}
      ]
 }
```

## Sample Filter Flights 
GET ``http://localhost:8000/flights/filter/?api_token=734e1d761f6d87a73b4a0434910356a568f5b159&flightNumber=CX500``
will be return :
```json
{
    "result": {
        "1": {
            "id": 3,
            "user_id": 1,
            "airline_id": 3,
            "flightNumber": "CX500",
            "departurePort": "SDY",
            "arrivalPort": "MEL",
            "departureTime": "2020-08-23 15:43:13",
            "arrivalTime": "2020-08-24 15:43:13",
            "created_at": "2020-08-23T15:43:13.000000Z",
            "updated_at": "2020-08-23T15:43:13.000000Z"
        }
    }
}
```

## Route Config
Sample Route:
```php
* GET  http://localhost:8000/flights/?api_token=734e1d761f6d87a73b4a0434910356a568f5b159
* GET  http://localhost:8000/flights/filter/?api_token=734e1d761f6d87a73b4a0434910356a568f5b159&flightNumber=CX500
* GET  http://localhost:8000/airlines/?api_token=734e1d761f6d87a73b4a0434910356a568f5b159
* GET  http://localhost:8000/airlines/delete/1?api_token=734e1d761f6d87a73b4a0434910356a568f5b159
* POST http://localhost:8000/airlines/create/?api_token=734e1d761f6d87a73b4a0434910356a568f5b159&code=QF110&name_airlines=Qantas (QF)
* POST http://localhost:8000/flights/create/?api_token=734e1d761f6d87a73b4a0434910356a568f5b159&user_id=1&airline_id=2&flightNumber=QF110&departurePort=JKT&arrivalPort=BDG&departureTime=2020-08-24 15:43:13&arrivalTime=2020-08-24 15:43:13
```

## How to Test API using Swagger in local
Open terminal and type `php -S localhost:8000 public/index.php` then open browser and type `http://localhost:8000/api/jojo-flight-api`

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
