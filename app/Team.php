<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = "teams";

    public function contestants()
    {
        return $this->hasMany('App\Contestant');
    }

    public function captain()
    {
        return $this->hasOne('App\Captain');
    }
}
