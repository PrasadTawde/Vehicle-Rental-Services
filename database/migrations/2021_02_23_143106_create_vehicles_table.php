<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('vehicle_id');
            $table->string('vehicle_no', 20);
            $table->string('vehicle_type', 20);
            $table->string('vehicle_model', 20);
            $table->string('vehicle_fuel_type', 20);
            $table->integer('vehicle_min_deposite');
            $table->string('vehicle_state', 20);
            $table->string('vehicle_img', 20);
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
        Schema::dropIfExists('vehicles');
    }
}
