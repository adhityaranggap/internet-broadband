<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';
    protected $primaryKey = 'id';
    
    protected $filllable =[
        'id',
        'code',
        'jenis_ticket',
        'deskripsi_ticket',
        'berkas_customer',
        'status',
        'note_admin',
        'berkas_admin',
        'user_id'
    ];
}
