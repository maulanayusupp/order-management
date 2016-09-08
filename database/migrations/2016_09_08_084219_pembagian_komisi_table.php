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
            $table->integer('user_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->integer('komisi_am');
            $table->integer('komisi_ac');
            $table->integer('biaya_instalasi');
            $table->integer('biaya_bulanan');
            $table->integer('komisi_instalasi_am');
            $table->integer('komisi_bulanan_am');
            $table->integer('komisi_instalasi_ac');
            $table->integer('komisi_bulanan_ac');
            $table->integer('jumlah_komisi_am');
            $table->integer('jumlah_komisi_ac');
            $table->string('status');
            /*FOREIGN KEY*/
            $table->foreign('user_id')->references('id')->on('users');
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
