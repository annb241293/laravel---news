<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "user";
    protected $primaryKey = "idUser";
    public $timestamps = false;

    public function getAuthPassword(){
    	 return $this->Password;
    } 
}
