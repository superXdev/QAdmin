# QAdmin
a free, open-source dashboard panel starter kit for Laravel. Just intall and everything is ready

![App Screenshot](https://github.com/superXdev/QAdmin/blob/main/public/dist/img/screenshot/ss.png?raw=true)

  

## Tech Stack

**Client:** [ruangAdmin](https://github.com/indrijunanda/RuangAdmin), Bootstrap, Jquery, filePond

**Server:** PHP 7.3.x, Laravel 8.x

  
## Dependencies

- [Laravel Breeze](https://github.com/laravel/breeze)
- [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
- [spatie/laravel-activitylog](https://github.com/spatie/laravel-activitylog)
- [akaunting/laravel-setting](https://github.com/akaunting/laravel-setting)
- [Laravel Modules](https://nwidart.com/laravel-modules/v1)

  
## Features

- ruangAdmin template
- Authentication with Laravel Breeze
- User & Roles management
- Activity logs
- Settings menu
- 15 laravel components ready-to-use
- Laravel modules
- Unit testing
  
## Installation 

You can fork or clone this project

``` 
git clone git@github.com:superXdev/QAdmin.git
cd QAdmin
composer install
cp .env.example .env <-- edit db config
php artisan admin:install
```
That's it!

## Running Tests

To run tests, run the following command

```
php artisan test
```

```
Tests:  29 passed
Time:   7.58s
```

## License

QAdmin is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). 
