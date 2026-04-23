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
        Schema::create('fines', function (Blueprint $table) {
        $table->id();
        $table->string('nama_peminjam'); // Sementara pakai string agar tidak ketergantungan tabel lain
        $table->integer('amount'); 
        $table->text('reason');    
        $table->enum('status', ['paid', 'unpaid'])->default('unpaid'); 
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fines');
    }
};
