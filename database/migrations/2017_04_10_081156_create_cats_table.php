<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('post_cat',function (Blueprint $table)
        {
          $table->integer('post_id')->unsigned()->index();
          $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

          $table->integer('cat_id')->unsigned()->index();
          $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');

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
        Schema::dropIfExists('cats');
        Schema::dropIfExists('post_cat');
    }
}
