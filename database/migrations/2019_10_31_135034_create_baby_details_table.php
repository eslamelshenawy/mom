<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('baby_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('baby_id')->unsigned();
            $table->softDeletes();

            $table->foreign('baby_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('baby_details');
    }
}
