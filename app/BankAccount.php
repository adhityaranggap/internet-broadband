<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    protected $table = 'bank_account';
    protected $primaryKey = 'id';
    
    protected $filllable =[
        'id',
        'nama',
        'logo',
        'account_number',
        'account_owner'
    ];
}
