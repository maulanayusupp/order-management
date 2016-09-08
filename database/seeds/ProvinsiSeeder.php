<?php

use Illuminate\Database\Seeder;
use App\Provinsi;
class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provinsi::populate();
    }
}
