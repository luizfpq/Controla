<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('id_supplier');
            $table->string('name', 255);
            $table->string('description', 255)->nullable('true');
            $table->float('buy_value', 6, 2)->comment('Valor pelo qual o produto foi adquirido');
            $table->float('sell_value', 6, 2)->comment('Valor pelo qual o produto será vendido');
            $table->foreign('id_supplier')->references('id')->on('suppliers');
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
