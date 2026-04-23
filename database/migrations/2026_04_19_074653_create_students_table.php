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
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('nama');           // Nama Siswa
        $table->string('nis')->unique();  // Nomor Induk Siswa
        $table->string('subject');        // Mata Pelajaran
        $table->integer('score');         // Nilai Progres
        $table->text('notes')->nullable(); // Catatan Tambahan
        $table->timestamps();
    });
}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
