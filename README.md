[//]: # (generate readme.md with basic details)
## Management System
It is a web app that has has a front end and a back end. The front end is written in html, 
css and jquery and the back end is written in Laravel. The back end uses a SQL database to store
the data. The system allows users to make reservations for vehicles and allows the
admin to manage the fleet of vehicles and monitor the reservations as they are made.

## Installation
Prior to in you need to have the following prerequisites installed:
- PHP 7.2.5 or higher
- Composer
- Node.js
- NPM
- MySQL

Once you have copied the repository to your local machine, you need to intall the 
dependencies. To do this, navigate to the root directory of the project and run
the following commands:
```
composer install
npm install
```

Next, update the .env file with your database credentials. Then run the following
commands to create the database and populate it with the tables:
```
php artisan migrate
php artisan db:seed
```

Finally, run the following command to start the server:
```
php artisan serve
```

## Usage
To use the system, open a web browser and navigate to the following url:
```
http://localhost:8000
```
