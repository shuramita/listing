<?php

Route::group(['namespace' => 'Shuramita\Property\Controllers'], function()
{
    Route::get('property/test',['as' =>'shura_property_test','uses'=>function(){
        return 'working';
    }] );
    Route::get('property/create',['as' =>'shura_property_create','uses'=>'PropertyController@create'] );
    Route::get('nha-thue',['as' =>'shura_property_for_rent','uses'=>'PropertyController@for_rent'] );
    Route::get('nha-ban',['as' =>'shura_property_for_sale','uses'=>'PropertyController@for_sale'] );
});

