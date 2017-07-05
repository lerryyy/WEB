<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Downloadpdf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('downloadpdf', function(Blueprint $table) {
            $table->increments('id');
            $table->string('file_title');
            $table->string('file_name');
           
            $table->timestamps();
            $table->softDeletes();
              });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('downloadpdf');
    }
}
