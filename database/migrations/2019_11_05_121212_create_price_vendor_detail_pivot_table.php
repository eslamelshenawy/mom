<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceVendorDetailPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_vendor_detail', function (Blueprint $table) {
            $table->bigInteger('price_id')->unsigned();
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('cascade');
            $table->bigInteger('vendor_detail_id')->unsigned();
            $table->foreign('vendor_detail_id')->references('id')->on('vendor_details')->onDelete('cascade');
            $table->primary(['price_id', 'vendor_detail_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_vendor_detail');
    }
}
