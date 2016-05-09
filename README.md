# Max CMS

## Install

`"maxsofts/maxcms" : "0.1.*"`

and add from composer.json

```
"repositories": [
        {
            "type": "git",
            "url": "https://github.com/maxsofts/maxcms"
        }
    ],
 ```
 
 add this from config/app.php

 On Proveders Add new class
 ```php
 'providers' => [
     /**
     *
     * Add new class
     *
     */
    maxsofts\maxcms\maxcmsServiceProvider::class,

 ]
 ```

 and Add this helper

 ```php
 'aliases' => [
    /**
    *
    * Add new class
    *
    */
    'MaxRender' => \maxsofts\maxcms\Modules\Helpers\MaxRender::class,
    ]
 ```

## Usage

``` php
php artisan vendor:publish
php artisan migrate
```
