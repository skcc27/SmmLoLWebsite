<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Captain extends Model
{
    protected $table = "teams_captains";
    public $timestamps = false;

    public function contestant()
    {
        return $this->belongsTo('App\Contestant');
    }

    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
