<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = "packages";

    public function customers()
    {
    	return $this->belongsToMany('App\Customer');
    }
}
