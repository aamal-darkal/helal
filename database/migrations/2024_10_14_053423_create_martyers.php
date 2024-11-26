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
        Schema::create('martyers', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar' ,50)->index();
            $table->string('name_en' ,50)->index();
            $table->year('DOB');
            $table->foreignId('province_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('martyers');
    }
};
