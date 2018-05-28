<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    protected $table = 'calculators';
    protected $fillable=[ 'id','title','marketing_service_id'];
    public function options()
    {
        return $this->hasMany('App\Options');
    }
    public function marketingService()
    {
        return $this->belongsToMany('App\MarketingService','marketing_services_id','id');
    }
}
