<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVehicleIdToHasRentedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('has_rented', function (Blueprint $table) {
            $table->string('payment_id');
            $table->integer('pickup_location');
            $table->integer('drop_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('has_rented', function (Blueprint $table) {
            //
        });
    }
}
