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
        Schema::create('periksas', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('id_pasien');
        $table->unsignedBigInteger('id_dokter');
        $table->timestamp('tgl_periksa');
        $table->string('catatan')->nullable();
        $table->integer('biaya_periksa')->nullable();

        // foreign key
        $table->foreign('id_pasien')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('id_dokter')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksas');
    }
};
