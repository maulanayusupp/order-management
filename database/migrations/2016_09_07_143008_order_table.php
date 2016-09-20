<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('alamat');
            $table->string('jabatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('nomor_telepon');
            $table->string('instansi');
            $table->integer('biaya_instalasi');
            $table->integer('biaya_bulanan');
            /*KOMISI*/
            $table->integer('komisi_instalasi_am')->nullable();
            $table->integer('komisi_bulanan_am')->nullable();
            $table->integer('komisi_instalasi_ac')->nullable();
            $table->integer('komisi_bulanan_ac')->nullable();
            /*FOREIGN KEY*/
            $table->integer('account_manager_id')->unsigned();
            $table->integer('account_coordinator_id')->unsigned();
            $table->foreign('account_manager_id')->references('id')->on('users');
            $table->foreign('account_coordinator_id')->references('id')->on('users');
            $table->string('status');    
            $table->timestamps();
        });

        Schema::table('order', function ($table) {
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
