<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 27/01/2018
 * Time: 8:03 PM
 */

namespace Shuramita\Property;


class Helper
{
    static function menu(){
        // return array of available menu
    }
    static function for_rent(){
        return route('shura_property_for_rent');
    }
    static function for_sale(){
        return route('shura_property_for_sale');
    }
    static function create(){
        return route('shura_property_create');
    }
    static function can($do){
        return $do;
    }
}