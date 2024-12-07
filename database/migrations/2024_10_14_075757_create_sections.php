<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->enum('type', ['article', 'campaign', 'news', 'story' , 'vacancy' , 'page'])->index();
            $table->string('title_ar', 100)->index();
            $table->string('title_en', 100)->index();
            $table->text('content_ar');
            $table->text('content_en');
            $table->integer('summary_length')->default(100);
            $table->date('date')->default(DB::raw('CURDATE()'))->index();
            $table->boolean('hidden')->default(false);
            $table->foreignId('image_id')->nullable()->constrained();
            $table->foreignId('province_id')->nullable()->constrained();
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
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
