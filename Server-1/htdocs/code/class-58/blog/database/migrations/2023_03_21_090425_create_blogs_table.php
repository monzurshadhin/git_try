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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id');
            $table->string('author_name',255);
            $table->string('title',255);
            $table->text('slug');
            $table->text('description');
            $table->string('blog_type',255);
            $table->text('image');
            $table->date('date');
            $table->tinyInteger('status')->default(1)->comment('0=unpublished,1=published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
