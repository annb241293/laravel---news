<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function getIndex(){
    	return view('admin.layouts.danhsach');
    }
    public function getLogin(){
    	return view();
    }
    public function postLogin(Request $req){

    }
}
