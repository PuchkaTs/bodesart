<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'birth', 'about', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'birth',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function language(){
        return $this->belongsTo('App\Language');
    }

    public function getListOfArtists(){

        $locale = session('locale', 'en');

        $language = Language::where('slug', $locale)->first();

         $artists = $language->artists()->whereHas('role', function($q){
            $q->where('name', 'Artist');
        })->get();

        return $artists;
    }
}
