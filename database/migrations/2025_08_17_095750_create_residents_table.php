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
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_lahir');
            $table->enum('gender', ['Laki-laki','Perempuan']);
            $table->string('agama');
            $table->enum('status_pekerjaan', ['bekerja','tidak bekerja']);
            $table->enum('status_pendidikan', ['sekolah', 'tamat sekolah', 'putus sekolah']);
            $table->enum('status_hubungan', ['belum menikah', 'menikah', 'cerai', 'janda/duda']);
            $table->enum('status_tinggal', ['tetap', 'pindahan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
