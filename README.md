## Classco ##

**Classco** is a “Mini Class Management System” project with Laravel to manage classroom assignments.

### Installation ###

* type `git clone https://github.com/JustCabyr/classco.git projectname` to clone the repository 
* type `cd projectname`
* type `composer install`
* type `composer update`
* copy *.env.example* to *.env*
* type `php artisan key:generate`to generate secure key in *.env* file
* if you use MySQL in *.env* file :
   * set DB_CONNECTION
   * set DB_DATABASE
   * set DB_USERNAME
   * set DB_PASSWORD
* if you use sqlite :
   * type `touch database/database.sqlite` to create the file
* type `php artisan migrate --seed` to create and populate tables
* edit *.env* for emails configuration

### Features ###

* Home page
* Authentication (registration, login, logout, password reset, mail confirmation, throttle)
* Users roles : administrator (all access) and user (view assignment and submit solution)
* Admin dashboard

### Tricks ###

To use application the database is seeding with users :

* Administrator : email = admin@admin.com, password = password
* User : email = user@user.com, password = password

### Tests ###

When you want to launch the tests refresh and populate the database :

`php artisan migrate:fresh --seed`

### License ###

This example for Laravel is open-sourced software licensed under the MIT license
