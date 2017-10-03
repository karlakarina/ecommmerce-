<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
class MainController extends Controller{

	public function home(){
		return view ('home',[]);
	}

	public function cerrar(){
		Auth::logout();	
		return view("home");
	}

}
