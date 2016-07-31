<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsCaptainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams_captains', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('team_id')->unique();
            $table->unsignedInteger('contestant_id')->unique();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('contestant_id')->references('id')->on('contestants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teams_captains');
    }
}
