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
            $table->id('PhotoID')->increment();
            $table->string('UserPhoto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('userphoto');
    }
}
