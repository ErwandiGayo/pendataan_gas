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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('kode_s');
            $table->string('nama_brg');
            $table->string('jenis_brg');
            $table->string('merk');
            $table->string('harga');
            $table->string('stock');
            $table->unsignedInteger('brgmsk');
            $table->unsignedInteger('brgklr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
