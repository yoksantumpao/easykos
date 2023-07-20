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
        Schema::create('penghuni_kos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_penghuni', 255);
            $table->string('email_penghuni', 255);
            $table->string('no_wa', 16);
            $table->string('no_telp', 16);
            $table->string('pekerjaan', 150);
            $table->string('nik', 16);
            $table->text('ktp');
            $table->text('foto_profile');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penghuni_kos');
    }
};
