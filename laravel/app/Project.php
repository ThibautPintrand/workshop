<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table ='projet';

    public function message(){
        return $this->hasMany('App\\Message');
    }
    public function module(){
        return $this->hasMany('App\\Module');
    }

}
