# Social Web App Demo

This applcation is written with an AngularJs frontend and laravel backend (I know, we pulled out all the stops on this one).  Follow the steps below to run the application in your browser.

This application features a login and create an account, as well as a commenting system which is viewable upon login.  Once logged into the app, users can post comments and upload pictures with those comments, and using a package developed by Buonzz, laravel can track which city they are located in based on their ip address.  This is useful for our dynamic map feature, which will be integrated with the comments to show where users are posting their comments from.

## Installation

1. Clone the repo: `git clone git@github.com:scotch-io/laravel-angular-comment-app`
2. change directory: `cd laravel-angular-comment-app/`
3. Install Laravel: `composer install --prefer-dist`
4. Change your database settings in `app/config/database.php`
5. Migrate your database: `php artisan migrate`
6. Seed your database: `php artisan db:seed`
7. View your application in browser by typing localhost/laravel/public.
