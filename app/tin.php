<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tin extends Model
{
    protected $table = "tin";
    protected $primaryKey = "idTin";
    public $timestamps = false;
    public function loaitin(){
    	return $this->belongsTo('App\loaitin','idLT','idLT');
    }
    public function comment(){
    	return $this->hasMany('App\comment','idTin','idTin');
    }
    public function theloai(){
    	return $this->belongsTo('App\theloai','idTL','idTL');
    }
}
