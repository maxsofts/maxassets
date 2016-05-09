<?php

namespace maxsofts\maxcms\Modules\Helpers;

use maxsofts\maxcms\Modules\Assets\MaxcmsAssets;

class MaxRender{

    /**
     *
     * return Styles
     *
     * @param Config::get("<your config>") $config
     */
   public static function renderStyles($config){

       $asset = new MaxcmsAssets();

       $asset->initAssetsConfig($config);

       return $asset->getStyles();
   }

    public static function renderScripts($config){
        $asset = new MaxcmsAssets();

        $asset->initAssetsConfig($config);

        return $asset->getScripts();
    }
}