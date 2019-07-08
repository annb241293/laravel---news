<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'comment';
    public $timestamps = false;
    public function tin(){
    	return $this->belongsTo('App\User','idTin','idTin');
    }
}
