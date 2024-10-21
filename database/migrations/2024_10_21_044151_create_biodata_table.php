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
            $table->id('biodata_id')->increment();
            $table->string('name');
            $table->text('address');
            $table->string('phone_number');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('biodata');
    }
}
