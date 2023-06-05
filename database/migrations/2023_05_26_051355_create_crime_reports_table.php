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
        Schema::create('crime_reports', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->string('local_govt');
            $table->string('street_address');
            $table->string('file_path')->nullable();
            $table->integer('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crime_reports');
    }
};
