<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'alamat',
        'jabatan',
        'kota',
        'provinsi',
        'kode_pos',
        'nomor_telepon',
        'instansi',
        'biaya_instalasi',
        'biaya_bulanan',
        'account_manager_id',
        'account_coordinator_id',
        'komisi_instalasi_am',
        'komisi_bulanan_am',
        'komisi_instalasi_ac',
        'komisi_bulanan_ac',
        'status',
    ];
    /* FEEDBACK RELATION ONE TO MANY RELATION TABLE USER */
    public function AccountManager() {
        return $this->belongsTo('App\User', 'account_manager_id');
    }
    /* FEEDBACK RELATION ONE TO MANY RELATION TABLE USER */
    public function AccountCoordinator() {
        return $this->belongsTo('App\User', 'account_coordinator_id');
    }
    /* RELATION ONE TO ONE TO TABLE PEMBAGIAN KOMISI */
    public function order(){
        return $this->hasOne('App\PembagianKomisi','order_id');
    }
}
