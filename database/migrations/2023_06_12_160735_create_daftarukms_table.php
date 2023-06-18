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
        Schema::create('daftarukms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nim');
            $table->string('nama');
            $table->string('prodi');
            $table->string('fakultas');
            $table->text('ukm');
            $table->text('portofolio')->nullable();
            $table->text('syarat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftarukms');
    }
};
