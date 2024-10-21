<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        // table User
        Schema::create('users', function (Blueprint $table) {
            $table->id('UserID')->increment();
            $table->string('UserEmail')->unique();
            $table->string('UserName')->unique();
            $table->string('Password')->unique();
            $table->integer('RoleID');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
