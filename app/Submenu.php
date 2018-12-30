<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
	protected $table = 'submenus';

	protected $fillable = ['name', 'position'];

	public function menu(){
		return $this->belongsTo('App\Menu');
	}

	public function products(){
		return $this->hasMany('App\Product');
	}
}
