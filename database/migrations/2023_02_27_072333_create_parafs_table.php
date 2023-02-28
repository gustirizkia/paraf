<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParafsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parafs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('jenis');
            $table->string('kategori');
            $table->string('type');
            $table->string('image')->nullable();
            $table->string('nomor')->nullable();
            $table->longText('deskripsi')->nullable();
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
        Schema::dropIfExists('parafs');
    }
}
