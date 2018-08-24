<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->text('nama_depan');
          $table->text('nama_belakang');
          $table->string('password');
          $table->text('name');
          $table->string('email');
          $table->string('barang');
          $table->string('alamat');
          $table->string('alamat_2');
          $table->string('telfon');
          $table->string('negara');
          $table->string('kota');
          $table->integer('kode_pos');
          $table->timestamp('created_at');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
