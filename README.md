Yii2 DotEnv
===========

PHP DotEnv for Yii2 framework.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist masihfathi/yii2-dotenv "*"
```

or add

```
"masihfathi/yii2-dotenv": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :
```
[
    'db' => [
        'password' => env('DB_PASS'),
    ],
]
```

The env function will autoload .env file, it uses the following search mechanism:

    If there is a Yii class, then pass the alias @vendor or @app or @yii, Otherwise 
    according to the project directory to determine.
    
But, if your application vendor directory is a symbol link and you not registered
@vendor or @app alias before call env function, the project will not working. So
you should set the @vendor alias before calling env function.
