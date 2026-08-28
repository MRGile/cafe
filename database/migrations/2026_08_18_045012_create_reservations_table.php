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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp', 20);
            $table->string('email')->nullable();
            $table->date('tanggal');
            $table->string('waktu');
            $table->integer('jumlah_orang');
            $table->string('occasion')->nullable();
            $table->string('no_meja')->nullable(); // Ditentukan oleh Admin
            $table->text('catatan')->nullable();
            $table->enum('status', ['pending', 'approved', 'reject'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
