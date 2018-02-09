<?php
namespace Shuramita\Property\Controllers;

class PropertyController
{
    public function create(){
        return view('property::pages.create');
    }
    public function for_rent(){
        return view('property::pages.list');
    }
    public function for_sale(){
        return view('property::pages.list');
    }
}