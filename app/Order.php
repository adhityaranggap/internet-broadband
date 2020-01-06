<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

   
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable =[
        'id',
        'customer_has_package_id',
        'payment_id',
        'period',
        'multiplier',
        'status',
        'notes',
        'created_at',
        'updated_at'

    ];
    
}
