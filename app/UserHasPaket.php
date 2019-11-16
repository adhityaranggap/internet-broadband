<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHasPaket extends Model
{
    protected $table = 'user_has_paket';
    protected $primaryKey = 'id';
    
    protected $filllable =[
        'id',
        'paket_id',
        'user_id',
        'status'
    ];
}
