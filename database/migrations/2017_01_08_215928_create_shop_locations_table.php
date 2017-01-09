<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade'); 
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');    
            $table->string('street_address');
            $table->string('location_coordinates');
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
        Schema::dropIfExists('shop_locations');
    }
}
