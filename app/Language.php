<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = "languages";

    protected $fillable = ['name', 'position'];

    public function menus(){
    	return $this->hasMany('App\Menu');
    }

    public function galleries(){
    	return $this->hasMany('App\Gallery');
    }

    public function artists(){
    	return $this->hasMany('App\User');
    }

    public function getListOfLangs(){

    	$langs = Self::orderBy('position', 'asc')->get();

    	return $langs;
    }
}
