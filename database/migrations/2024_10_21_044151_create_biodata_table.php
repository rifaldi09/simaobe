<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    public function up()
    {
        // Table Biodata
        Schema::create('biodata', function (Blueprint $table) {
            $table->id('BiodataID')->increment();
            $table->string('Name');
            $table->text('Address');
            $table->string('PhoneNumber');
            $table->integer('UserID');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biodata');
    }
}
