<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ajax extends Controller
{
    
	public function postAjax(Request $request){
		 $response = ['status' => 'success',
          'msg' => $request->content,
          'name'=>$request->name];
      return response()->json($response); 

	}
}
