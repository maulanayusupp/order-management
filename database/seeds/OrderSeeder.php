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
		App\Order::create([
		    'first_name' => 'Maulana',
		    'last_name' => 'Yusup Abdullah',
		    'email' => 'maulanayusupp@gmail.com',
		    'alamat' => 'Kabupaten Bandung',
		    'jabatan' => 'CEO',
		    'kota' => 'Kabupaten Bandung',
		    'provinsi' => 'Jawa Barat',
		    'kode_pos' => '40563',
		    'nomor_telepon' => '087822766333',
		    'instansi' => 'PT. Anggo Store',
		    'biaya_instalasi' => 50000000,
		    'biaya_bulanan' => 500000,
		    'account_manager_id' => 2,
		    'account_coordinator_id' => 4,
		    'status' => 'paid',
		]);
		App\Order::create([
		    'first_name' => 'Maulana',
		    'last_name' => 'Yusup Abdullah',
		    'email' => 'maulanayusupp@gmail.com',
		    'alamat' => 'Kabupaten Bandung',
		    'jabatan' => 'CEO',
		    'kota' => 'Kabupaten Bandung',
		    'provinsi' => 'Jawa Barat',
		    'kode_pos' => '40563',
		    'nomor_telepon' => '087822766333',
		    'instansi' => 'PT. Anggo Store',
		    'biaya_instalasi' => 75000000,
		    'biaya_bulanan' => 750000,
		    'account_manager_id' => 2,
		    'account_coordinator_id' => 4,
		    'status' => 'unpaid',
		]);
		App\Order::create([
		    'first_name' => 'Maulana',
		    'last_name' => 'Yusup Abdullah',
		    'email' => 'maulanayusupp@gmail.com',
		    'alamat' => 'Kabupaten Bandung',
		    'jabatan' => 'CEO',
		    'kota' => 'Kabupaten Bandung',
		    'provinsi' => 'Jawa Barat',
		    'kode_pos' => '40563',
		    'nomor_telepon' => '087822766333',
		    'instansi' => 'PT. Anggo Store',
		    'biaya_instalasi' => 90000000,
		    'biaya_bulanan' => 900000,
		    'account_manager_id' => 2,
		    'account_coordinator_id' => 4,
		    'status' => 'unpaid',
		]);
		App\Order::create([
		    'first_name' => 'Maulana',
		    'last_name' => 'Yusup Abdullah',
		    'email' => 'maulanayusupp@gmail.com',
		    'alamat' => 'Kabupaten Bandung',
		    'jabatan' => 'CEO',
		    'kota' => 'Kabupaten Bandung',
		    'provinsi' => 'Jawa Barat',
		    'kode_pos' => '40563',
		    'nomor_telepon' => '087822766333',
		    'instansi' => 'PT. Anggo Store',
		    'biaya_instalasi' => 65000000,
		    'biaya_bulanan' => 650000,
		    'account_manager_id' => 3,
		    'account_coordinator_id' => 4,
		    'status' => 'unpaid',
		]);
		App\Order::create([
		    'first_name' => 'Maulana',
		    'last_name' => 'Yusup Abdullah',
		    'email' => 'maulanayusupp@gmail.com',
		    'alamat' => 'Kabupaten Bandung',
		    'jabatan' => 'CEO',
		    'kota' => 'Kabupaten Bandung',
		    'provinsi' => 'Jawa Barat',
		    'kode_pos' => '40563',
		    'nomor_telepon' => '087822766333',
		    'instansi' => 'PT. Anggo Store',
		    'biaya_instalasi' => 40000000,
		    'biaya_bulanan' => 400000,
		    'account_manager_id' => 3,
		    'account_coordinator_id' => 4,
		    'status' => 'unpaid',
		]);
    }
}
