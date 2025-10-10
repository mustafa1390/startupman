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
        Schema::create('section_publics', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('name')->default('setting')->nullable();
            $table->string('priority')->nullable();
            $table->string('status')->default('active');
            $table->string('section_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_publics');
    }
};
