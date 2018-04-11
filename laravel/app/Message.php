<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table ='historique_message';

    public function user(){
        return $this->hasOne('App\\User');
    }
    public function project(){
        return $this->hasOne('App\\Project');
    }
}
