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
        Schema::create('rumah_kos', function (Blueprint $table) {
            $table->id();
            $table->text('nama_rumah_kos', 255);
            $table->text('deskripsi_rumah_kos', 255);
            $table->enum('jenis_rumah_kos', ['campur', 'khusus pria','khusus wanita']);
            $table->text('fasilitas', 255);
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
        Schema::dropIfExists('rumah_kos');
    }
};
