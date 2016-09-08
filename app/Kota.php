<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use RajaOngkir;
class Kota extends Model
{
	protected $table = 'kota';

    protected $fillable = ['id', 'name'];

	public static function populate() {
		foreach (RajaOngkir::Kota()->all() as $kota) {
			$model = static::firstOrNew(['id' => $kota['city_id']]);
			$model->name = $kota['type'] . ' ' . $kota['city_name'];
			$model->save();
		}
	}
}
