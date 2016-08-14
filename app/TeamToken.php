<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamToken extends Model
{
    protected $table = 'teams_token';

    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
