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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama mahasiswa
            $table->string('nim')->unique(); // Nomor Induk Mahasiswa (unik)
            $table->string('email')->unique(); // Email mahasiswa
            $table->string('phone')->nullable(); // Nomor telepon (opsional)
            $table->enum('gender', ['male', 'female'])->nullable(); // Jenis kelamin
            $table->date('birth_date')->nullable(); // Tanggal lahir
            $table->string('address')->nullable(); // Alamat mahasiswa
            $table->string('department')->nullable(); // Jurusan mahasiswa
            $table->string('program')->nullable(); // Program studi
            $table->string('photo')->nullable(); // Lokasi file photo mahasiswa
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
