# mkfgdemo

##To run the application (on XAMPP):

1.) Install xampp and create user credentials for MySQL database

2.) Create appropriate database in MySQL for connection

3.) Install Composer and add it to path environment variable

4.) Using Composer (and following the directions below), install the laravel framework under the htdocs file for XAMPP, which is where the files are hosted locally

5.) Once there (after following directions below), open a browser and type localhost/laravel/public, which should bring you to the default laravel screen with its symbol.  This is how you know it was installed properly.

6.) Finally, start coding! 

##Terminal Commands for Installation

1. Clone the repo: `git clone git@github.com:scotch-io/laravel-angular-comment-app`
2. change directory: `cd laravel-angular-comment-app/`
3. Install Laravel (in current directory where project lies): `composer install --prefer-dist`
4. Change your database settings in `app/config/database.php`
5. Migrate your database (in project directory): `php artisan migrate`
6. Seed your database (in project directory): `php artisan db:seed`
7. View your application in browser.
8. Login: laravel/public/login, Register (not yet functional): laravel/public/register
