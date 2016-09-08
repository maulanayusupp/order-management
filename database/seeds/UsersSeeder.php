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
			'name' => 'Account Manager',
			'email' => 'am@gmail.com',
			'password' => bcrypt('am'),
			'role' => 'account-manager',
			'status' => 'aktif',
		]);
		// sample account coordinator id 3
		App\User::create([
			'name' => 'Account Coordinator',
			'email' => 'ac@gmail.com',
			'password' => bcrypt('ac'),
			'role' => 'account-coordinator',
			'status' => 'aktif',
		]);
    }
}
