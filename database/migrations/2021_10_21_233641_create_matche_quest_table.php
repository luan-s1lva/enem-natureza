<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatcheQuestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matche_quest', function (Blueprint $table) {
            $table->id();
            $table->foreignId('matche_id')->constrained();
            $table->foreignId('quest_id')->constrained();
            $table->boolean('acertou');
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
        Schema::dropIfExists('matches_quests');
    }
}
