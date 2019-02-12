<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Porject

The project use Laravel framework with Observer and Repository Design Pattern . Thinking about developing a To Do List API service the first thing that comes in my mind was the Observer Design Pattern: in the future maybe you would like to add some more stuff to the project according to what happens to the that task (creating, updating, deleting). Observer Design Patter make this kind of improvement super simple. 
Injecting the repository into the controller's constructor you make it very descriptive, simple and easy to understand. Repository Desing Pattern isolate your code from the persistance and let you migrate this solution to other systems that maybe haven't Eloquent or MYSQL DB. A new repository have to implements the TaskInterface and , of course, a new Observer class listening to creating, updating .... and so on events. 
This project , with more time , could be improved but this solution seems to be very abstracted. 

## Installing
Download this project or clone it. Now you have to install the dependeces in order to use this project, so from the project's root you have to launch the command 
```sh
composer install
```
Then you have to copy .env.example to create your brand new .env config file. From command line you can launch :
Windows 
```sh
copy .env.example .env 
```
Linux
```sh
cp .env.example .env 
```
Then you have to change database settings in your .env. Now you're able to create the table into your db. To do it you should now launch the command 

```sh
php artisan migrate
```
The instaling keys for Auth2 Server. Launch the command
```sh
php artisan passport:install
```

Final step create the APP KEY by launching the command

```sh
php artisan key:generate
```
```sh
php artisan serve
```

## To Create a task


METHOD -> POST
PARAM -> title
ATTRIBUTES-> Accept : application/json
             Authorization : Authorization: Bearer valid_token

http://yourhost/the_path_of_this_repo/public/api/tasks

## To Delete a task

METHOD -> DELETE
ATTRIBUTES-> Accept : application/json
             Authorization : Authorization: Bearer valid_token

http://yourhost/the_path_of_this_repo/public/api/tasks/{id}

## To Mark Task as done

METHOD -> PUT
ATTRIBUTES-> Accept : application/json
             Authorization : Authorization: Bearer valid_token

http://yourhost/the_path_of_this_repo/public/api/tasks/{id}

## To Get a list of all tasks

METHOD -> GET
ATTRIBUTES-> Accept : application/json
             Authorization : Authorization: Bearer valid_token

http://yourhost/the_path_of_this_repo/public/api/tasks


## To Get a list of tasks added by this user

METHOD -> GET
ATTRIBUTES-> Accept : application/json
             Authorization : Authorization: Bearer valid_token

http://yourhost/the_path_of_this_repo/public/api/user/tasks


## To Register a new user

http://yourhost/the_path_of_this_repo/public/register

## To Get a valid token to use for the requests

METHOD -> POST
ATTRIBUTES-> grant_type:password
             client_secret:the secret of the Laravel Password Grant Client under table oauth_clients
             client_id:the oauth_clients.id of the secret above
             username:user's email address
             password:user's password

http://yourhost/the_path_of_this_repo/public/oauth/token


Enjoy

