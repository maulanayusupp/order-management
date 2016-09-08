<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembagianKomisi extends Model
{
    protected $table = 'pembagian-komisi';

    protected $fillable = [
    	'user_id',
    	'order_id',
    	'komisi_am',
    	'komisi_ac',
    	'biaya_instalasi',
    	'biaya_bulanan',
    	'komisi_instalasi_am',
    	'komisi_bulanan_am',
    	'komisi_instalasi_ac',
    	'komisi_bulanan_ac',
    	'jumlah_komisi_am',
    	'jumlah_komisi_ac',
    ];
}
