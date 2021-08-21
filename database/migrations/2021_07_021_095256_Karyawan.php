<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Karyawan extends Migration{
    
    public function up(){
        Schema::create('Karyawan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nip');
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('Karyawan');
    }
}