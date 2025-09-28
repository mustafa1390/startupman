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
        Schema::create('section_users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('landing_page_id');
            $table->integer('sectionable_id');   // morph id
            $table->string('sectionable_type');
            $table->string('priority')->nullable();
            $table->string('status')->default('inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_users');
    }
};
