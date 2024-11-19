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
        Schema::create('main_components', function (Blueprint $table) {
            $table->string('key_en' , 20)->primary();
            $table->string('key_ar');
            $table->string('value_en' , 7500)->nullable();
            $table->string('value_ar' , 7500)->nullable();
            $table->boolean('isFile')->default(0);
            $table->foreignId('user_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_page');
    }
};
