<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table = 'options';
    public function price()
    {
        return $this->hasMany('App\Price');
    }
    public function calculator()
    {
        return $this->belongsTo('App\Calculator');
    }

}
