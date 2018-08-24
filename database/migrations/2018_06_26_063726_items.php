<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('items', function (Blueprint $table) {

      $table->increments('id');
      $table->string('merek');
      $table->string('tipe');
      $table->integer('price');
      $table->integer('harga');
      $table->string('file');
      $table->string('kategori');
      $table->string('isi');
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
        Schema::dropIfExists('items');
    }
}
