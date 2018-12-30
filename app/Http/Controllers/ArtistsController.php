<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ArtistsController extends Controller
{
    public function show(User $user){

    	if ($user->role->name == 'Admin') {
    		return redirect('/');
    	}
    	return view('artist')->with(['artist' => $user]);
    }
}
