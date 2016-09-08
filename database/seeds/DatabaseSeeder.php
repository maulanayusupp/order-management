<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(KotaSeeder::class);
        $this->call(ProvinsiSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(KomisiSeeder::class);
    }
}
