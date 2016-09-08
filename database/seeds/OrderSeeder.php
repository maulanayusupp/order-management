<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i <2 ; $i++) { 
    		App\Order::create([
			    'first_name' => 'Maulana',
			    'last_name' => 'Yusup Abdullah',
			    'email' => 'maulanayusupp@gmail.com',
			    'alamat' => 'Kabupaten Bandung',
			    'jenis_kelamin' => 'Laki - Laki',
			    'kota' => 'Kabupaten Bandung',
			    'provinsi' => 'Jawa Barat',
			    'kode_pos' => '40563',
			    'nomor_telepon' => '087822766333',
			    'instansi' => 'PT. Anggo Store',
			    'biaya_instalasi' => 50000000,
			    'biaya_bulanan' => 500000,
			    'account_manager_id' => 2,
			    'account_coordinator_id' => 3,
			    'status' => 'paid',
			]);
    	}
    	for ($i=0; $i <3 ; $i++) { 
    		App\Order::create([
			    'first_name' => 'Maulana',
			    'last_name' => 'Yusup Abdullah',
			    'email' => 'maulanayusupp@gmail.com',
			    'alamat' => 'Kabupaten Bandung',
			    'jenis_kelamin' => 'Laki - Laki',
			    'kota' => 'Kabupaten Bandung',
			    'provinsi' => 'Jawa Barat',
			    'kode_pos' => '40563',
			    'nomor_telepon' => '087822766333',
			    'instansi' => 'PT. Anggo Store',
			    'biaya_instalasi' => 50000000,
			    'biaya_bulanan' => 500000,
			    'account_manager_id' => 2,
			    'account_coordinator_id' => 3,
			    'status' => 'unpaid',
			]);
    	}  	

    }
}
