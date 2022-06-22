<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->integer('clubs');
            $table->integer('events');
            $table->integer('visits');
            $table->string('notify_email');
            $table->string('homepage');
            $table->string('about');
            $table->string('contact');
            $table->string('calendar');
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
        Schema::dropIfExists('counters');
    }
};
