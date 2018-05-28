<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'prices';
    public function options()
    {
        return $this->belongsToMany('App\Options');
    }
}
