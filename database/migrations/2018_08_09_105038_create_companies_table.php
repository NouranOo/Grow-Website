<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('news_content');
            $table->string('offer_content');
            $table->string('offer_title');
            $table->string('tax_percentage');
            $table->integer('order_limit');
            $table->string('currency');
            $table->integer('round');
            $table->string('discount_type');
            $table->integer('verified');
            $table->integer('pay_method_id');
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
        Schema::dropIfExists('companies');
    }
}
