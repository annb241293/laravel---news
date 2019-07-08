<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    protected $table = "loaitin";
    protected $primaryKey = "idLT";
    public $timestamps = false;
    public function theloai(){
    	return $this->belongsTo('App\theloai','idTL','idTL');
    }
    public function tin(){
    	return $this->hasMany('App\tin','idLT','idLT');
    }
}
