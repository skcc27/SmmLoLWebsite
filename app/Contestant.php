<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contestant extends Model
{
    protected $table = 'contestants';

    /**
     * Get the team of the contestant
     */
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
