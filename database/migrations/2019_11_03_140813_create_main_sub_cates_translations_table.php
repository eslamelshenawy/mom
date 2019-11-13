<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainSubCatesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_sub_cates_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('main_sub_cates_id')->unsigned();
            $table->string('name');
            $table->string('locale')->index();
            $table->unique(['main_sub_cates_id']);
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
        Schema::dropIfExists('main_sub_cates_translations');
    }
}
