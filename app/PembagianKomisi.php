<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembagianKomisi extends Model
{
    protected $table = 'pembagian-komisi';

    protected $fillable = [
    	'order_id',
        'account_manager_id',
        'account_coordinator_id',
    	'biaya_instalasi',
    	'biaya_bulanan',
    	'komisi_instalasi_am',
    	'komisi_bulanan_am',
    	'komisi_instalasi_ac',
    	'komisi_bulanan_ac',
    	'jumlah_komisi_instalasi_am',
        'jumlah_komisi_bulanan_am',
    	'jumlah_komisi_instalasi_ac',
        'jumlah_komisi_bulanan_ac',
    ];
    /* FEEDBACK RELATION ONE TO MANY RELATION TABLE USER */
    public function AccountManager() {
        return $this->belongsTo('App\User', 'account_manager_id');
    }
    /* FEEDBACK RELATION ONE TO MANY RELATION TABLE USER */
    public function AccountCoordinator() {
        return $this->belongsTo('App\User', 'account_coordinator_id');
    }
    /* FEEDBACK RELATION ONE TO ONE RELATION TABLE ORDER */
    public function order(){
        return $this->belongsTo('App\Order','order_id');
    }
}
