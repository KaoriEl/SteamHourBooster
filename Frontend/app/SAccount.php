<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;
use App\User;

class SAccount extends Model
{
//    protected $table = "s_accounts";

    function owner(){

        return $this->belongsTo('App/User');
    }

    function games(){
        return $this->hasMany('App\Game', 'account');
    }
}
