<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(){
        Schema::create('blog_locals', function (Blueprint $table) {
            $table->id();
            $table->integer('blog_id');
            $table->string('title_value');
            $table->string('category_value');
            $table->string('tags_value');
            $table->text('description_value');
            $table->text('content_value');
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
        Schema::dropIfExists('blog_locals');
    }
};
