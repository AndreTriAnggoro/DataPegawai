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
        Schema::create('pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pegawai_id');
            $table->string('nip')->nullable();
            $table->string('jabatan');
            $table->string('divisi');
            $table->date('tanggal_mulai_kerja');
            $table->enum('status_pegawai', ['Tetap', 'Kontrak', 'Magang', 'Freelancer']);
            $table->enum('level_senioritas', ['Junior', 'Mid-level', 'Senior']);
            $table->timestamps();

            $table->foreign('pegawai_id')->references('id')->on('pegawai')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjaan');
    }
};
