<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table = "theloai";
    protected $primaryKey = "idTL";
    public $timestamps = false;

    public function loaitin(){
    	return $this->hasMany('App\loaitin','idTL','idTL');
    }
    
    public function tin(){
    	return $this->hasManyThrough('App\tin','App\loaitin','idTL','idLT','idTL','idLT');
    } 
  
}
