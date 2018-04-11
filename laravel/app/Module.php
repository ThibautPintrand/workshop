<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table ='module';

    public function user(){
        return $this->hasMany('App\\User');
    }
    public function project(){
        return $this->hasMany('App\\Project');
    }
}
