<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    public function SiteService()
    {
        return $this->belongsTo('App\SiteService');
    }
}
