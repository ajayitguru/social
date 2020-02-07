<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJointeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jointeams', function (Blueprint $table) {
            $table->bigIncrements('id');
              $table->unsignedBigInteger('user_id');
              $table->unsignedBigInteger('challenge_id');
              $table->unsignedBigInteger('match_id');
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
        Schema::dropIfExists('jointeams');
    }
}
