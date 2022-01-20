
## What is DaaS?  

DaaS is a Drag and Drop website builder and a powerful next generation CMS. It's based on the PHP Laravel Framework. You can use it to make any kind of website, online store, and blog. The Drag and Drop technology allows you to build your website without any technical knowledge.

The core idea of the software is to let you create your own website, online shop or blog. From this moment of creation, your journey towards success begins. Supporting you along the way will be different modules, customizations and features of the CMS. Many of them are specifically tailored for e-commerce enthusiasts and bloggers.

The most important thing you need to know is that DaaS pairs the latest Drag & Drop technology, with a revolutionary Real-Time Text Writing & Editing feature. This pair of features delivers an improved user experience, easier and quicker content management, a visually appealing environment, and flexibility.

#### Drag & Drop
#### Real Time Text Editing
#### Powerful Admin Panel
#### E-commerce Solution
## Requirements  

* HTTP server  
* Database server
* PHP >= 7.3
  * `lib-xml` must be enabled (with DOM support)
  * `GD` PHP extension

### HTTP Server

#### Apache
The `mod_rewrite` module must be enabled in your Apache configuration. DaaS creates the necessary `.htaccess` files during installation, including one with `Deny All` directive in each folder to ensure that there are no entry points other than `index.php`.

#### nginx
Add this `location` directive to your `server` configuration block. The `root` directive must point to the base folder of your DaaS website (which by default is where this readme is located).
```
server {
  location / {
    try_files $uri $uri/ /index.php$is_args$args;
  }
}
```

### IIS

You can easily [import the `.htaccess` rewrite rules](http://www.iis.net/learn/extensions/url-rewrite-module/importing-apache-modrewrite-rules). Make sure you have enabled [the URL Rewrite module](http://www.iis.net/learn/extensions/url-rewrite-module/using-the-url-rewrite-module) for your website.

### Database
You have several choices for database engine: MySQL, SQLite, Microsoft SQL Server and PostgreSQL.
For small websites we highly recommend SQLite.
However, you can connect to more storage services (like [MongoDB](https://github.com/jenssegers/laravel-mongodb) or [Neo4j](https://github.com/Vinelab/NeoEloquent)) and take advantage of the Laravel framework.

On the installation screen you can only choose from databases enabled in your PHP configuration.
If you don't see your server of choice in the list you have to enable the corresponding [PDO](http://php.net/manual/en/book.pdo.php) extension for your database server. [An example for Microsoft SQL Server](http://php.net/manual/en/mssql.installation.php). PHP usually comes with PDO enabled by default but you might have to uncomment or add `extension` directives to your `php.ini`.



## Installation  

### Via Composer

#### Installing dependencies

You need to [have Composer installed](https://getcomposer.org/doc/00-intro.md) in order to download DaaS's dependencies.

You can clone and install DaaS with one command:

This will install DaaS in a folder named `my_site`.

Another way is to first clone the repository and then run `composer install` in the base directory.

#### File permissions
Make sure these folders, and everything inside, is writeable by the user executing the PHP scripts:
* config/
* storage/
* userfiles/
