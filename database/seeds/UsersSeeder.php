<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // sample admin id 1
		App\User::create([
			'name' => 'Administrator',
			'email' => 'admin@gmail.com',
			'password' => bcrypt('admin'),
			'role' => 'admin',
			'status' => 'aktif',
		]);
		// sample account manager id 2
		App\User::create([
			'name' => 'Maulana Yusup Abdullah',
			'email' => 'maulana@instapp.id',
			'password' => bcrypt('maulana'),
			'role' => 'account-manager',
			'status' => 'aktif',
		]);
		// sample account manager id 2
		App\User::create([
			'name' => 'Wage Rizal S',
			'email' => 'wage@instapp.id',
			'password' => bcrypt('wage'),
			'role' => 'account-manager',
			'status' => 'aktif',
		]);
		// sample account coordinator id 3
		App\User::create([
			'name' => 'Ridwan',
			'email' => 'ridwan@instapp.id',
			'password' => bcrypt('ridwan'),
			'role' => 'account-coordinator',
			'status' => 'aktif',
		]);
    }
}
