<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DichVu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dichvu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TieuDe');
            $table->string('NoiDung');
            $table->string('NoiDungVanTat');
            $table->integer('NoiBat');
            $table->integer('Moi');
            $table->string('Hinh');
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
        Schema::drop('dichvu');
    }
}
