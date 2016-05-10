# Max CMS

## Install

`"maxsofts/maxassets" : "0.1.*"`

and add from composer.json

```
"repositories": [
        {
            "type": "git",
            "url": "https://github.com/maxsofts/module-assets"
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
    maxsofts\maxassets\maxcmsServiceProvider::class,

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
    'MaxRender' => \maxsofts\maxassets\Modules\Helpers\MaxRender::class,
    ]
 ```

## Usage

Render From ```php<head></head>``` or end ```php <body></body>```

``` php
/**
* Render Style on Config file
*/
{!! MaxRender::renderStyles(config('maxcms.core.asset')) !!}

/**
* Render Scripts on Config file
*/
{!! MaxRender::renderScripts(config('maxcms.core.asset')) !!}
```
