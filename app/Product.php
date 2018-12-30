<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';

	protected $fillable = ['name', 'price', 'photo', 'description', 'position'];

	public function artist(){
		return $this->belongsTo('App\User', 'user_id');
	}

	public function submenu(){
		return $this->belongsTo('App\Submenu');
	}

	public function gallery(){
		return $this->belongsTo('App\Gallery', 'gallery_id');
	}
}
