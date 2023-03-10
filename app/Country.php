<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany('App\City');
    }

    public function languages(){
        return $this->belongsToMany('App\Language');
    }
}
