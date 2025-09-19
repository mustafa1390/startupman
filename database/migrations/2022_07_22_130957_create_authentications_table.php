<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthenticationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authentications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('email')->nullable();
            $table->string('email_verify')->default('inactive');
            $table->string('tell')->nullable();
            $table->string('tell_verify')->default('inactive');
            $table->string('tells')->nullable();
            $table->string('tells_verify')->default('inactive');
            $table->string('cardmelli')->nullable();
            $table->string('cardmelli_verify')->default('inactive');
            $table->string('selfi')->nullable();
            $table->string('selfi_verify')->default('inactive');
            $table->string('document')->nullable();
            $table->string('document_verify')->default('inactive');
            $table->string('status')->default('inactive');
            $table->string('email_code_verify')->nullable();
            $table->string('tell_code_verify')->nullable();
            $table->string('passport_verify')->default('inactive');
            $table->string('passport')->nullable();
            $table->string('tells_code_verify')->nullable();
            $table->string('codmelli_verify')->default('waiting');
            $table->string('codmelli')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authentications');
    }
}
