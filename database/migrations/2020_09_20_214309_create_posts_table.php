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
            $table->string('slug')->nullable();
            $table->string('title');
            $table->longText('excerpt')->nullable();
            $table->longText('body')->nullable();
            $table->string('status');
            $table->string('published_date');
            $table->longText('image_url')->nullable();
            $table->string('featured_image_caption')->nullable();
            $table->integer('total_likes')->unsigned()->default(0);
            $table->integer('total_unlikes')->unsigned()->default(0);
            $table->integer('total_views')->unsigned()->default(0);
            $table->bigInteger('author_id')->unsigned();
            $table->string('meta')->nullable();
            $table->foreign('author_id')->references('id')->on('users');
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
