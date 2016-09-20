<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PembagianKomisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembagian-komisi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('account_manager_id')->unsigned();
            $table->integer('account_coordinator_id')->unsigned();            
            $table->integer('biaya_instalasi');
            $table->integer('biaya_bulanan');
            $table->integer('komisi_instalasi_am');
            $table->integer('komisi_bulanan_am');
            $table->integer('komisi_instalasi_ac');
            $table->integer('komisi_bulanan_ac');
            $table->integer('jumlah_komisi_instalasi_am');
            $table->integer('jumlah_komisi_bulanan_am');
            $table->integer('jumlah_komisi_instalasi_ac');
            $table->integer('jumlah_komisi_bulanan_ac');
            /*FOREIGN KEY*/
            $table->foreign('account_manager_id')->references('id')->on('users');
            $table->foreign('account_coordinator_id')->references('id')->on('users');
            $table->foreign('order_id')->references('id')->on('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembagian-komisi');
    }
}
