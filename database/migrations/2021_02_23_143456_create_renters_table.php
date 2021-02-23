<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renters', function (Blueprint $table) {
            $table->increments('renter_id');
            $table->string('renter_fname', 50);
            $table->string('renter_lname', 50);
            $table->string('renter_house_no', 20);
            $table->string('renter_landmark', 50);
            $table->integer('renter_district');
            $table->string('renter_taluka', 20);
            $table->integer('renter_no_of_vehicles');
            $table->integer('renter_contact_no');
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
        Schema::dropIfExists('renters');
    }
}
