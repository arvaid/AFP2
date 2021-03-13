<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('username');
            //$table->string('email')->nullable(); //unique();
            //$table->string('auth');
            //$table->string('social')->comment('One of: Facebook, Github, Google');
           // $table->string('token');
            //$table->string('password')->nullable();
            //$table->rememberToken();
            $table->integer('score')->default(0);
            $table->integer('rang')->default(0);
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
