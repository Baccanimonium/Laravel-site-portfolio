<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteService extends Model
{
    protected $table = 'siteservices';
    public function Responses()
    {
        return $this->hasMany('App\Response');
    }
    public function Portfolios()
    {
        return $this->hasMany('App\Portfolio');
    }
}

