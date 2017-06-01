<?php
/**
 * Created by PhpStorm.
 * User: pater
 * Date: 01/06/2017
 * Time: 17:06
 */

if (!function_exists('page_title')){
     function page_title($title){
        $base_title = 'Laravel learn';
        if ($title === ''){
            return $base_title;
        }else{
            return $title.' | '. $base_title;
        }
    }
}if (!function_exists('set_active')){
     function set_active($route){

         return Route::is($route) ? 'active' : '';

    }
}