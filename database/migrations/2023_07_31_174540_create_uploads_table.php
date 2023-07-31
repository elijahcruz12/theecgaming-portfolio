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
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->text('file_path')->nullable();
            $table->string('file_type')->nullable();
            $table->boolean('is_finished_uploading')->default(false);
            $table->unsignedInteger('total_chunks')->nullable();
            $table->json('chunks')->nullable();
            $table->boolean('is_finished_processing')->default(false);
            $table->json('metadata')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploads');
    }
};
