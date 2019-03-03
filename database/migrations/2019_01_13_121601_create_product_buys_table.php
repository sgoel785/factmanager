<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_buys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_b_id');
            $table->date('buy_date');
            $table->string('quantity_b');
            $table->string('price_b');
            $table->string('party_b');
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
        Schema::dropIfExists('product_buys');
    }
}
