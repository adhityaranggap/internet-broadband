<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Router extends Model
{
    protected $table = 'router';
    protected $primaryKey = 'id';
    
    protected $filllable =[
        'id',
        'SN_router',
        'merk_router',
        'tipe_router',
        'mac_address',
        'user_id'
    ];
}
