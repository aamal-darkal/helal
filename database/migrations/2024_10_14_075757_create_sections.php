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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['article', 'compaign', 'news', 'story']);
            $table->string('title', 100)->index();
            $table->string('title_en', 100)->index();
            $table->string('content', 7500);
            $table->string('content_en', 7500);
            $table->boolean('visible')->default(true);        
            $table->foreignId('image_id')->nullable()->constrained;
            $table->foreignId('branch_id')->nullable()->constrained;
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('updated_by')->constrained('users')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
