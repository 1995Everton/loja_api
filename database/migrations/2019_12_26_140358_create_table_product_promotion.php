<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductPromotion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_promotion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('discount',5,2)->nullable();
            $table->integer('product_id');
            $table->integer('promotion_id');
            $table->timestamps();

            $table->foreign('product_id')
                ->references('id')
                ->on('product');
            $table->foreign('promotion_id')
                ->references('id')
                ->on('promotion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('product_promotion', function (Blueprint $table) {
            Schema::dropIfExists('product_promotion');
        });
    }
}
