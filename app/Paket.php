<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id';
    
    protected $filllable =[
        'id',
        'nama_paket',
        'kec_internet',
        'harga_paket',
    ];
}
