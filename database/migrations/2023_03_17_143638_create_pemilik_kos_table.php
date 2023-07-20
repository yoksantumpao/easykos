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
        Schema::create('pemilik_kos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_pemilik',255);
            $table->string('email_pemilik',255);
            $table->string('no_telp',12);
            $table->string('nama_bank',255);
            $table->string('no_rekening',25);
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemilik_kos');
    }
};
