<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ar_eg');
            $table->string('name_en_us');
            $table->integer('active');
            $table->integer('stock');
            $table->integer('price');
            $table->integer('tax_card');
            $table->integer('discount_percentage');
            $table->integer('discount_buy');
            $table->integer('discount_get');
            $table->integer('quota_product_limit');
            $table->integer('quota_order_limit');
            $table->integer('company_id');
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
        Schema::dropIfExists('products');
    }
}
