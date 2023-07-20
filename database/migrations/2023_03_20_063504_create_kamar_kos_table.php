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
        Schema::create('kamar_kos', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_kamar');
            $table->enum('jenis_kamar', ['Reguler','VVIP']);
            $table->string('ukuran_kamar' );
            $table->text('foto_kamar');
            $table->integer('nomor_kamar');
            $table->text('fasilitas_kamar');
            $table->double('farga_kamar');
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
        Schema::dropIfExists('kamar_kos');
    }
};
