<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterestedCakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interested_cake', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cake_id');
            $table->unsignedBigInteger('interested_id');
            $table->timestamps();

            $table->foreign('cake_id')->references('id')->on('cakes');
            $table->foreign('interested_id')->references('id')->on('interested_list');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interested_cake', function (Blueprint $table) {
            $table->dropForeign(['cake_id', 'interested_id']);
            $table->dropIfExists('interested_cake');
        });
    }
}
