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

        Schema::create('log_users', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('act');
            $table->string('name')->nullable();
            $table->string('agents')->nullable();
            $table->string('prev')->nullable();
            $table->string('url')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('redirect')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_users');
    }
};
