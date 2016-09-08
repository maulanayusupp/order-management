<?php

use Illuminate\Database\Seeder;
use App\Kota;
class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kota::populate();
    }
}
