<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pharmacy_name');
            $table->string('pharmacy_address');
            $table->string('pharmacy_license');
            $table->string('union_license');
            $table->string('owner_name');
            $table->string('email');
            $table->string('commerical_registration');
            $table->string('region');
            $table->string('tax_card');
            $table->integer('available_time');
            $table->integer('branch_number');
            $table->string('setting');
            $table->integer('verified');
            $table->integer('area_id');
            
            
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
        Schema::dropIfExists('pharmacies');
    }
}
