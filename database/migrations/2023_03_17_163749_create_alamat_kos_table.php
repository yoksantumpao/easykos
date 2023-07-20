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
        Schema::create('alamat_kos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('Provinsi', 255);
            $table->text('Kecamatan', 255);
            $table->text('Kabupaten_kota', 255);
            $table->text('Kode_pos', 255);
            $table->text('Jln_gang', 255);
            $table->float('Lat_long', 10,6);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alamat_kos');
    }
};
