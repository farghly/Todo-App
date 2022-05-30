## ToDo App
*Laravel version:9.14*

**About the application**
The idea of the application is make a list of tasks you want to complete or things that you want to do

## Screenshots from application


To use this application first clone it 
```bash
git clone https://github.com/farghly/Todo-App.git
```
**After cloning it istall packages**
```bash
composer install
```
**And config your env file with database**
```bash
copy .env.example .env
```
**Don't forget to generate key**
```bash
php artisan generate:key
```
<br/>

## **Migrate database**
```bash
php artisan migrate
```

**And launch the application**
```code
php artisan serve
```