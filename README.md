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
 
 ```php
 maxsofts\maxcms\maxcmsServiceProvider::class,
 ```
## Usage

``` php
php artisan vendor:publish
php artisan migrate
```
