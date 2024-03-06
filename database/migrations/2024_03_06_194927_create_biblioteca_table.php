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
        Schema::create('biblioteca', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('Autor');
            $table->string('Editorial');
            $table->string('precio');
            $table->string('libro_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biblioteca');
    }
};
