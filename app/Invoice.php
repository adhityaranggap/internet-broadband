<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';
    protected $primaryKey = 'id';
    
    protected $filllable =[
        'id',
        'code',
        'tgl_invoice',
        'jumlah_tagihan',
        'status',
        'user_id'
    ];
}
