<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    
    protected $filllable =[
        'id',
        'jenis_pembayaran',
        'kategori_pembayaran',
        'lampiran',
        'deskripsi',
        'bank_account_id',
        'user_id'
    ];
}
