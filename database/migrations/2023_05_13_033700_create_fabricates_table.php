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
        Schema::create('fabricate', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Author');
            $table->string('Summary');
            $table->string('AN');
            $table->string('Genre');
            $table->string('Cover');
            $table->string('Content');
            $table->string('NCL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fabricate');
    }
};
