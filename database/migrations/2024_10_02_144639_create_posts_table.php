<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->string("image")->nullable();
            $table->string("user_id")->nullable();
            $table->string("user_type")->nullable();
            $table->string("post_status")->nullable();
            $table->string("name")->nullable();
            $table->string("category")->nullable();


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
        Schema::dropIfExists('posts');
    }
}
