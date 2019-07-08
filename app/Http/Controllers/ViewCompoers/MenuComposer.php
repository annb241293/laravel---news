<?php

namespace App\Http\Controllers\ViewCompoers;

use App\tin;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class MenuComposer extends Controller
{

     //Constructor
    public function __construct(Tin $tin){
    	$tin['tinMoi'] = tin::where('SoLanXem','>',1000)->inRandomOrder()->take(4)->get();
    	$tin['mostView'] = tin::orderBy('SoLanXem','desc')->take(4)->get();
        $this->tin = $tin;
    }
    // Compose view, thêm những biến chúng ta muốn chia sẻ vào đây.
    public function compose(View $view){

        $view->with('tin', $this->tin);
    }
}
