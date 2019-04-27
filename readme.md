## Setup
```
$ composer install
```

## Copy ENV File
```
$ cp .env.example .env
```

## Application Key
```
$ php artisan key:generate
```

## Environment
```
$ vim .env

# modify DB parameters
DB_DATABASE={your db name}
DB_USERNAME={your db user}
DB_PASSWORD={your db password}
```

## Database
```
$ php artisan migrate
```

## JWT key
```
$ php artisan jwt:secret
```
