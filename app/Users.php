<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = array();

    protected $fillable =[
        'id',
        'nama',
        'username',
        'contact_person',
        'password',
        'alamat',
        'akses_group_id'
    ];
}
