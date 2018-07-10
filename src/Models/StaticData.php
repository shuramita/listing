<?php

namespace Shuramita\Property\Models;

use Illuminate\Database\Eloquent\Model;

class StaticData extends Model
{
    public $container = __DIR__.'/../resources/data/';
    public function all_provinces($view = null){
        $province = 'viet-nam-location.json';
        $provinces = $this->get_data_from_file($province);
        if(!empty($view)) {
            $view->with(['provinces'=>$provinces]);
        }
        return $provinces;
    }
    private function get_data_from_file($file_name,$format='json'){
        $file_path = $this->container.$file_name;
        if(file_exists($file_path)) {
            if($format == 'json') {
                return json_decode(file_get_contents($file_path));
            }
            else{
                return file_get_contents($file_path);
            }
        }else{
            return false;
        }

    }
}
