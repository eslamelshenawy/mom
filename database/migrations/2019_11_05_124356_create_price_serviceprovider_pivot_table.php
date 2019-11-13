<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceServiceproviderPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_serviceprovider', function (Blueprint $table) {
            $table->bigInteger('price_id')->unsigned()->index();
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('cascade');
            $table->bigInteger('serviceprovider_id')->unsigned()->index();
            $table->foreign('serviceprovider_id')->references('id')->on('serviceproviders')->onDelete('cascade');
            $table->primary(['price_id', 'serviceprovider_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_serviceprovider');
    }
}
