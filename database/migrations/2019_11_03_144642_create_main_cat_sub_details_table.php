<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainCatSubDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_cat_sub_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('main_sub_cates_id')->unsigned();

            $table->foreign('main_sub_cates_id')->references('id')->on('main_sub_cates')->onDelete('cascade');
            $table->softDeletes();

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
        Schema::dropIfExists('main_cat_sub_details');
    }
}
