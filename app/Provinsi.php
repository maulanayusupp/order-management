<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use RajaOngkir;
class Provinsi extends Model
{
    protected $table = 'provinsi';
    
    protected $fillable = ['id', 'name'];

	public static function populate() {
		foreach (RajaOngkir::Provinsi()->all() as $province) {
			$model = static::firstOrNew(['id' => $province['province_id']]);
			$model->name = $province['province'];
			$model->save();
		}
	}
}

