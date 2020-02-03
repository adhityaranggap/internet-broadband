<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use App\Notifications\InvoiceEmail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'password', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'username_verified_at' => 'datetime',
    ];

    public function role()
    {
        $data = DB::table('users')->join('akses_group', 'users.akses_group_id', 'akses_group.id')
                ->where('users.id', auth()->user()->id)->pluck('akses_group.hak_akses')->first();
        return $data;
    }
    
    public static function invoiceEmail($user)
    {
        return $user->notify(new InvoiceEmail);
    }
}
