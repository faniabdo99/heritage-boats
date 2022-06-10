<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(){
        Schema::create('club_locals', function (Blueprint $table) {
            $table->id();
            $table->integer('club_id');
            $table->string('title_value');
            $table->string('short_title_value');
            $table->text('description_value');
            $table->string('cord_name_value');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('club_locals');
    }
};
