<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama_depan');
            $table->text('nama_belakang');
            $table->string('email');
            $table->string('barang');
            $table->string('alamat');
            $table->string('alamat_2');
            $table->string('harga');
            $table->string('negara');
            $table->string('kota');
            $table->integer('kode_pos');
            $table->timestamp('tanggal_pembelian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
