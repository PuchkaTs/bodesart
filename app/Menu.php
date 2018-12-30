<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Language;

class Menu extends Model
{
	protected $table = 'menus';

	protected $fillable = ['name', 'position'];

	public function submenus(){
		return $this->hasMany('App\Submenu');
	}

	public function language(){
		return $this->belongsTo('App\Language');
	}

	public function getListOfMenu(){

		$locale = session('locale', 'en');

		$language = Language::where('slug', $locale)->first();

		$menus = $language->menus()->orderBy('position', 'asc')->with([

			'submenus' => function($query){

			$query->orderBy('position', 'asc');

		}])->get();

		return $menus;
	}

}
