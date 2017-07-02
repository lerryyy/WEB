<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlbumImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_images', function(Blueprint $table) {
            $table->increments('id');
            $table->string('waktu');
            $table->string('title');
            $table->text('album_foto');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::drop('album_images');
    }
}
