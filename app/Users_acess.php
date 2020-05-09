<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_acess extends Model
{
    //
    protected $connection = 'mysql';
    protected $database = 'laravel';
    protected $table = 'users_acess';
    public $timestamps = false;
    
    public function users(){
        return $this->hasMany('App\users');
    }
}
