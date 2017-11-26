<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryLeagueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_league', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->index()->foreign()->references("id")->on("categories")->onDelete("cascade");
            $table->integer('league_id')->unsigned()->index()->foreign()->references("id")->on("leagues")->onDelete("cascade");
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
        Schema::dropIfExists('category_league');
    }
}
