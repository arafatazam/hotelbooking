# Room booking
It's symfony project you need to have composer, php7.4 with xml, mbstring and pgsql modules
Run the below command to install symfony binary
```
https://github.com/arafatazam/hotelbooking
```
There is a docker-compose file. Run,
```
docker-compose up -d
```
Install all the dependencies
```
composer install
```
Then run the blow command to migrate the database
```
php bin/console doctrine:migrations:migrate
```
Run the application with
```
symfony server:start
```
Find the swagger api spec at http://localhost:8000/api/doc

note: WIP
