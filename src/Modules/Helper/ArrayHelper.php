<?php

namespace maxsofts\maxcms\Modules\Helper;

class ArrayHelper{

    public static function search_keys_exits($array,$search){
        $key = array_keys($array);

        $check = array_filter($key, function ($el) use ($search) {
            if (strpos($el, $search) !== false):
                return $el;
            endif;
        });

        return $check;
    }
}