# How to Run/Serve Project

##Install Dependencies 

```
composer update

composer install

php artisan key:generate

```

Edit .env file to change database username and password

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

```

### Run Migrations

```
php artisan migrate

```

#### Seed database

```
php artisan db:seed

```

### Install Node dependencies

```
npm install

```
### Compile Frontend Assets

```
npm run dev

```

### Serve web App

```
php artisan serve

``
