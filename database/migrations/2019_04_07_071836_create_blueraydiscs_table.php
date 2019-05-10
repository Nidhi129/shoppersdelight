<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlueraydiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blueraydiscs', function (Blueprint $table) {
            $table->bigIncrements('disc_id')->unique();
            $table->string('slug')->unique();
            $table->string('disc_name');
            $table->string('type');
            $table->string('condition');
            $table->Integer('original_price');
            $table->Integer('discount_price');
            $table->Integer('quantity');
            $table->string('description');
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
        Schema::dropIfExists('blueraydiscs');
    }
}
