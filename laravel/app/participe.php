<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participe extends Model
{
    protected $table = 'participe';

    public function project(){
        return $this->hasMany('App\\Project');
    }
    public function user(){
        return $this->hasMany('App\\User');
    }
}
