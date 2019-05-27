<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BinhLuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluan', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users');

            $table->integer('idSP')->unsigned();
            $table->foreign('idSP')->references('id')->on('sanpham');
            $table->string('NoiDung');
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
        Schema::drop('binhluan');
    }
}
