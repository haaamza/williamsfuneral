<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableObituaries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obituaries', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dob');
            $table->date('dod');
            $table->string('profile_image')->nullable();
            $table->longText('description');
            $table->string('city');
            $table->string('name');
            $table->string('state');
            $table->string('zip');
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
        Schema::dropIfExists('obituaries');
    }
}
