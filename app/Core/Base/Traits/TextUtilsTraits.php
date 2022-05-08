<?php

namespace App\Core\Base\Traits;

trait TextUtilsTraits
{
    protected function checkOrEmpty($item, $key, $default = ''){
        $value = array_key_exists($key, $item) ? $item[ $key ] : '';
        return empty($value) ? $default : $value;
    }
}
