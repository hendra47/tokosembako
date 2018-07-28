<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatetransaksisTable extends Migration
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
            $table->integer('id_kategori');
            $table->dateTime('tgl_berangkat');
            $table->integer('id_member');
            $table->integer('jml_penumpang');
            $table->integer('total_harga');
            $table->string('bukti_transfer');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksis');
    }
}
