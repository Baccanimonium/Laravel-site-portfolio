<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function siteService()
    {
        return $this->belongsTo('App\SiteService');
    }
}
