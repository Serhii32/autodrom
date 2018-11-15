<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('main_photo')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('titleSEO')->nullable();
            $table->text('descriptionSEO')->nullable();
            $table->string('keywordsSEO')->nullable();
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
        Schema::dropIfExists('pro_actions');
    }
}
