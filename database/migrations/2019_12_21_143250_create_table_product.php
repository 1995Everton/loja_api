<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',40)->nullable(false);
            $table->text('details')->nullable();
            $table->string('miniature',100)->nullable();
            $table->decimal('unitary_value',15,2)->nullable(false);
            $table->integer('stock')->nullable(false);
            $table->timestamp('last_sale')->nullable();
            $table->decimal('cost_price',15,2)->nullable();
            $table->timestamps();
            //foreign key
            $table->integer('category_id');
            $table->integer('brand_id');

            $table->foreign('category_id')
                ->references('id')
                ->on('category');
            $table->foreign('brand_id')
                ->references('id')
                ->on('brand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
