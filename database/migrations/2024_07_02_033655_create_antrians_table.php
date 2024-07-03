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
        Schema::create('tbl_antrian', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->smallInteger('no_antrian');
            $table->enum('status', ['0', '1'])->default('0');
            $table->dateTime('waktu_panggilan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrians');
    }
};
