<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('relawans', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->text('alamat');
            $table->string('email')->unique();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('tanggal_lahir'); // Tanggal lahir
            $table->string('kewarganegaraan'); // Kewarganegaraan
            $table->string('agama'); // Agama
            $table->string('no_telpon'); // Nomor telepon
            $table->longText('minat_bakat')->nullable(); // Minat dan bakat
            $table->string('foto')->nullable(); // Nama berkas foto (disimpan secara terpisah)
            $table->enum('role', ['Donatur', 'Relawan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relawans');
    }
};
