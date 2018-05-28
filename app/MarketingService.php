<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarketingService extends Model
{
    protected $table = 'marketing_services';
    public function calculator()
    {
        return $this->hasOne('App\Calculator');
    }
}
