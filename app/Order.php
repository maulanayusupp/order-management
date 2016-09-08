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
        'jenis_kelamin',
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

    public function AccountManager() {
        return $this->hasMany('User', 'account_manager_id');
    }
    
    public function AccountCoordinator() {
        return $this->hasMany('User', 'account_coordinator_id');
    }
}
