# Laravel REST Project

This is a Laravel Project that has a REST API as an endpoint, the project uses different tools that Laravel offers, like
Resources, Validation, Authentication, DBORM, Requests, etc.

## Requirements
* [`^7.3PHP`](https://www.php.net/downloads.php#v7.4.28)
* [`Composer`](https://getcomposer.org/)

## Installation

To install the project, run the following commands:

```sh
git clone git@github.com:irvingzamora28/laravel-rest.git
cd laravel-rest
composer install
php artisan migrate --seed
php artisan passport:install
```
## Configuration
The project needs some configuration before it is started, create a file called .env inside the project's root
Inside .env paste the following code:

```sh
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=false
APP_URL=http://localhost
APP_TIMEZONE='America/Chihuahua'

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbname
DB_USERNAME=username
DB_PASSWORD=password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

```
Modify the DB_DATABASE, DB_USERNAME, DB_PASSWORD to the values of the credentials to your own database.

The last step is to generate a key for the project, in order to do that, run the following command:

```sh
php artisan key:generate
```
## Quick start

To start the project, run the following command:

```sh
php artisan serve
```

After running the command, the project should be live in http://localhost:8000/

## Database seed

The command `php artisan migrate --seed` creates all the necessary tables for the project and also fills up the 
regions and communes table with data.

Example

| id_reg        | Region                        | id_com    | Coomune       |
| ------------- |:-----------------------------:|:---------:| -------------:|
|      1        | Región De Tarapacá            |      5    | Iquique       |
|      1        | Región De Tarapacá            |      6    | Camiña        |
|      1        | Región De Tarapacá            |      7    | Colchane      |
|      1        | Región De Tarapacá            |      8    | Huara         |
|      1        | Región De Tarapacá            |      9    | Pica          |
|      1        | Región De Tarapacá            |     10    | Pozo Almonte  |
|      1        | Región De Tarapacá            |     11    | Alto Hospicio |


## REST Routes
| Method        | URL                           | Description  |
| ------------- |:-----------------------------:| ------------:|
| GET           | `api/customers`                | Get a list of all the customers |
| POST          | `api/customers`                | Create a new customer |
| POST          | `api/customers/register`       | Register a new customer |
| PUT           | `api/customers/{customer_id}`  | Update a customer |
| DELETE        | `api/customers/{customer_id}`  | Delete a customer |
| GET           | `api/customers/{customer_id}`  | Get the information of a customer |

## Tests

The project is implemented with feature testing, the purpose of these tests is to verify that the routes are
only accesible with OAuth2.

To execute the tests, run the following command:
```sh
php artisan test
```

## Requests

Register a customer

`api/customers/register`

```sh
{
    "dni": "1234567890",
    "name": "Johnny",
    "email": "johnnycash1@email.com",
    "last_name": "Cash",
    "id_reg": 1,
    "id_com": 11
}
```

Get list of all active customers

`api/customers`

Get information of the customer (active)

`api/customers/{customer_id}`

Delete customer (active|inactive)

`api/customers/{customer_id}`

Update a customer (active|inactive)

`api/customers/{customer_id}`

```sh
{
    "name": "New name",
    "status": "A"
}
```