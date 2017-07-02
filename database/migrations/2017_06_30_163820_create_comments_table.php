<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function(Blueprint $table) {
            $table->increments('id');
            $table->string('content');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('articles_id');
            $table->unsignedInteger('comments_id');
            $table->unsignedInteger('jadwal_ibadahs_id');
      
          
           
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');

             $table->foreign('articles_id')->references('id')->on('articles')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('comments_id')->references('id')->on('comments')
            ->onUpdate('cascade')->onDelete('cascade');

             $table->foreign('jadwal_ibadahs_id')->references('id')->on('jadwal_ibadahs')
            ->onUpdate('cascade')->onDelete('cascade');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
