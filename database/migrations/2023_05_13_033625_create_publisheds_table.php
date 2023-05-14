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
        Schema::create('published', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Author');
            $table->string('Summary');
            $table->string('Genre');
            $table->string('Cover');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('published');
    }
};
