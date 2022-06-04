<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('background_image');
            $table->string('image');
            $table->string('title');
            $table->string('slug');
            $table->string('short_title');
            $table->text('description');
            $table->integer('members');
            $table->integer('palms');
            $table->string('cord_name');
            $table->string('cord_email')->nullable();
            $table->string('cord_phone');
            $table->integer('user_id');
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
        Schema::dropIfExists('clubs');
    }
};
