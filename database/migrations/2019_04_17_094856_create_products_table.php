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
             $table->integer('sub_category_id')->references('sub_categories')->on('id');
            $table->string('brand_id')->references('brands')->on('id')->nullable();
            $table->string('name')->nullable();
            $table->Integer('original_price');
            $table->Integer('discount_price');
            $table->Integer('quantity')->nullable();
            $table->text('product_detail_format')->nullable();
            $table->text('options')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('products');
    }
}
