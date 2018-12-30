<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Submenu;

class ProductsController extends Controller
{
    public function show(Product $product){

    	return view('product')->with(compact('product'));
    }

    public function submenu(Submenu $submenu){

    	return view('submenu')->with(compact('submenu'));

    }
}
