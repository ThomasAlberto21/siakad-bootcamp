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
        Schema::create('tata_nilai', function (Blueprint $table) {
            $table->id();
            $table->string('grade', 3);
            $table->decimal('bobot', 2, 1);
            $table->decimal('nilai_minimal', 5, 2);
            $table->decimal('nilai_maksimal', 5, 2);
            $table->string('predikat', 30);
            $table->boolean('status_lulus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tata_nilai');
    }
};
