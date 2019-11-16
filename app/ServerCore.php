<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServerCore extends Model
{
    protected $table = 'server_core';
    protected $primaryKey = 'id';
    
    protected $filllable =[
        'id',
        'nama_server',
        'type_server',
        'JMLuser_server',
        'bw_server'
    ];
}
