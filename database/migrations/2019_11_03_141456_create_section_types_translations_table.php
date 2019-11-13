<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionTypesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_types_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('section_types_id')->unsigned();
            $table->string('name');
            $table->string('locale')->index();
            $table->unique(['section_types_id']);
            $table->foreign('section_types_id')->references('id')->on('section_types')->onDelete('cascade');
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
        Schema::dropIfExists('section_types_translations');
    }
}
