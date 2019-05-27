<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LienHe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lienhe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DiaChi');
            $table->integer('SoDienThoai');
            $table->string('Email');
            $table->string('ThongTin');
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
        Schema::drop('lienhe');
    }
}
