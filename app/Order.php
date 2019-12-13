<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = "orders";
   
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable =[
        'id',
        'customer_id',
        'packages_id',
        'payment_id',
        'expired',
        'start',
        'status',
        'notes',
        'created_at',
        'updated_at'

    ];
    
}
