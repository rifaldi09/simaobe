<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserphotoTable extends Migration
{
    public function up()
    {
        // Table User Photo
        Schema::create('userphoto', function (Blueprint $table) {
            $table->id('photo_id')->increment();
            $table->string('user_photo');
            $table->integer('biodata_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('userphoto');
    }
}
