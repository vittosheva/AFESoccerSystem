<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_references', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_profile_id')->unsigned();
            $table->foreign('player_profile_id')->references('id')->on('player_profiles');
            $table->string('year', 4);
            $table->integer('fee')->unsigned();
            $table->string('other_comments', 255);
            $table->string('management_comments', 255);
            $table->boolean('active')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('player_references');
    }
}
