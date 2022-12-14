<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jasas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jasa');
            $table->string('foto_jasa_1')->nullable();
            $table->string('foto_jasa_2')->nullable();
            $table->string('foto_jasa_3')->nullable();
            $table->string('foto_jasa_4')->nullable();
            $table->string('foto_jasa_5')->nullable();
            $table->text('deskripsi');
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
        Schema::dropIfExists('jasas');
    }
};
