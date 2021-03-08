# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use Github issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)



============================= read this
============================= configration

ci4 structure:
	/app
	/system
	/public
	/writable
	/tests 
	/docs


	/app
	    /Config         Stores the configuration files
	    /Controllers    Controllers determine the program flow
	    /Database       Stores the database migrations and seeds files
	    /Filters        Stores filter classes that can run before and after controller
	    /Helpers        Helpers store collections of standalone functions
	    /Language       Multiple language support reads the language strings from here
	    /Libraries      Useful classes that don't fit in another category
	    /Models         Models work with the database to represent the business entities.
	    /ThirdParty     ThirdParty libraries that can be used in application
	    /Views          Views make up the HTML that is displayed to the client.


	system
		This directory stores the files that make up the framework, itself. While you have a lot of flexibility in how you use the application directory, the files in the system directory should never be modified. Instead, you should extend the classes, or create new classes, to provide the desired functionality.
		All files in this directory live under the CodeIgniter namespace.

	public
		The public folder holds the browser-accessible portion of your web application, preventing direct access to your source code. It contains the main .htaccess file, index.php, and any application assets that you add, like CSS, javascript, or images.
		This folder is meant to be the “web root” of your site, and your web server would be configured to point to it.

	writable
		This directory holds any directories that might need to be written to in the course of an application’s life. This includes directories for storing cache files, logs, and any uploads a user might send. You should add any other directories that your application will need to write to here. This allows you to keep your other primary directories non-writable as an added security measure.

	tests
		This directory is set up to hold your test files. The _support directory holds various mock classes and other utilities that you can use while writing your tests. This directory does not need to be transferred to your production servers.

	docs
		If this directory is part of your project, it holds a local copy of the CodeIgniter4 User Guide.



	Simple Codeigniter 4 CRUD Application in Hindi
	-------------------------------------
	Installation CI4
	-------------------------------------
	0) You need to install Composer first, if you already installed you can skip this step.
		install composer in htdocs/php/php.exe folder
		and test composor is install completely. run cmd
		composer
		
	1) Open your working folder, if you are using xammpp you need to open htdocs directory.
	2) Now open CMD and go to htdocs folder, and run the composer command given below.
	   composer create-project codeigniter4/appstarter ci4_crud

	   Note: make sure  *intl* and *mbstring* extension installed.

	3) To access the project in browser, we need top open ci4_crud in CMD and run the command given below.
	   php spark serve
	   If, you see a welcome screen it means, you have successfully installed Codeigniter 4 project.

	4) Create a database called ci4_latest with a table called "books", that we will use in our CRUD application
	   id, title, isbn_no, author, created_at

