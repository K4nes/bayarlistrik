<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('daftar_pelanggan', function (Blueprint $table) {
            $table->bigInteger('id_pelanggan')->primary(); // id_pelanggan tidak auto increment, tetap primary key
            $table->string('no_meter', 20)->unique();
            $table->string('nama_pelanggan', 50);
            $table->text('alamat');
            $table->date('tgl_bayar');
            $table->string('id_tarif', 20);
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('daftar_pelanggan');
    }
};
