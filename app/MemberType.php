<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberType extends Model
{
    protected $table = 'member_type';
    protected $primaryKey = 'id';
    
    protected $filllable =[
        'id',
        'nama_type'
    ];
}
