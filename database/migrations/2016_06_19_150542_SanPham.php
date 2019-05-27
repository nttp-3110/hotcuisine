<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idLoaiSP')->unsigned();
            $table->foreign('idLoaiSP')->references('id')->on('LoaiSP');
            $table->string('Ten');
            $table->string('TenKhongDau');
            $table->string('NoiDung');
            $table->string('NoiDungVanTat');
            $table->integer('NoiBat');
            $table->string('Hinh');
            $table->string('Gia');
            $table->integer('Moi');
            $table->integer('SoLuotXem');
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
        Schema::drop('menu');
    }
}
