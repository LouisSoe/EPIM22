<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('ekstrakurikulers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('keterangan');
            $table->smallInteger('status')->default(1);
            $table->text('gambar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ekstrakurikulers');
    }
};
