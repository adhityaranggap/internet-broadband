<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";
    protected $primaryKey = 'id';
    protected $fillable =[
        'id',
        'username',
        'nama',
        'contact_person',
        'alamat',
        'router_id',
        'created_at',
        'updated_at',
        'user_id'
    ];

}
