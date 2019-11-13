<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceproviderTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceprovider_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('serviceprovider_id')->unsigned();
            $table->string('name');
            $table->string('locale')->index();
            $table->unique(['serviceprovider_id']);
            $table->foreign('serviceprovider_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('serviceprovider_translations');
    }
}
