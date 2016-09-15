# Laravel 5.2, Angular 2, and Bootstrap 3.3.* Time Tracker [![License](http://jeremykenedy.com/license-mit.svg)]()

Laravel Angular Time Tracker is a simple time tracking application built on Laravel 5.2, Angular 2, and Bootstrap 3. It uses Laravel's built in authentication, MySQL, Angular Bootstrap 1.3.*, Angular Resource 1.5.* ngResource, jQuery 2.2.4 and Moment.js 2.13.*

| Laravel Angular Time Tracker Features |
| :------------ |
| Built on Angular 2 |
| Built on Laravel 5.2 |
| Built on Bootstrap 3.3.* |
| Makes use of MySQL Database |
| Uses Laravel Authentication |
| Uses Angular Bootstrap 1.3.* |
| Uses Angular Resource 1.5.* ngResource |
| Uses Moment.js 2.13.* |
| Uses jQuery 2.2.4|

### I. Quick Project Setup - Installation

###### 1. Clone the repository using the following command in terminal:

	`sudo git clone https://github.com/jeremykenedy/laravel-time-tracker.git laravel-time-tracker`

###### 2. Pull and Install Laravel Dependencies:

	`sudo composer update`

###### 3. Download and Install Node Assets:

	`sudo npm install`

###### 4. Pull resources via Bower using the following command in terminal from the projects root folder:

	`bower update`

###### 5. Setup and Compile front-end assets using the following command in terminal from the projects root folder:

	`sudo gulp`

###### 6. Create your MySQL Database and table.

###### 7. Copy the example file  using the following command in terminal from the projects root folder:

	`sudo cp .env.example .env`

###### 8. Configure the Database and SMTP email settings in the ```.env``` file.

###### 9. Setup Database Schema using the following command in terminal from the projects root folder:

	`sudo php artisan migrate`

### II. Libraries Used Documentation
* [Angular JS 2](https://angular.io/docs/ts/latest/)
* [Angular Bootstrap 1.3.*](https://angular-ui.github.io/bootstrap/)
* [Angular Resource 1.5.*](https://docs.angularjs.org/api/ngResource)
* [Bootstrap 3.*](http://getbootstrap.com/)
* [Moment.js 2.13.*](http://momentjs.com/docs/)
* [jQuery 2.2.4](http://api.jquery.com/)

### III. License
[MIT license](https://github.com/jeremykenedy/angular-timetracker/blob/master/LICENSE) included
