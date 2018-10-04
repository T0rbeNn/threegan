<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('titleEnglisch');
            $table->string('titleDeutsch');
            $table->mediumText('bodyEnglisch');
            $table->mediumText('bodyDeutsch');
            $table->enum('tags', array("Health", "Environment", "Ethics", "Recipe", "Gesundheit", "Umwelt", "Ethik"));
            $table->integer('views');
            $table->string('altText');
            $table->string('imgLink');
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
