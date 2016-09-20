<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /* ONE TO MANY RELATION TABLE ORDER*/
    public function orderAccountManager() {
        return $this->hasMany('App\Order', 'account_manager_id');
    }
    /* ONE TO MANY RELATION TABLE ORDER*/
    public function orderAccountCoordinator() {
        return $this->hasMany('App\Order', 'account_coordinator_id');
    }
    /* ONE TO MANY RELATION TABLE PEMBAGIAN KOMISI*/
    public function komisiAccountManager() {
        return $this->hasMany('App\PembagianKomisi', 'account_manager_id');
    }
    /* ONE TO MANY RELATION TABLE PEMBAGIAN KOMISI*/
    public function komisiAccountCoordinator() {
        return $this->hasMany('App\PembagianKomisi', 'account_coordinator_id');
    }
}
