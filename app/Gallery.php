<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $fillable = ['name', 'position'];

    public function products(){
    	return $this->hasMany('App\Product');
    }

	public function language(){
		return $this->belongsTo('App\Language');
	}

    public function getListOfGalls(){

		$locale = session('locale', 'en');

		$language = Language::where('slug', $locale)->first();

		$galls = $language->galleries()->orderBy('position', 'asc')->with('products')->get();

    	// $galls = Self::orderBy('position', 'asc')->with('products')->get();

    	return $galls;
    }
}
