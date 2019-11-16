<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AksesGroup extends Model
{
    protected $table = 'akses_group';
    protected $primaryKey = 'id';
    
    protected $filllable =[
        'id',
        'hak_akses'
    ];
}
