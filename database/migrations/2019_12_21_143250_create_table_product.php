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
            $table->string('description',80)->nullable(false);
            $table->text('details')->nullable();
            $table->string('brand',20)->nullable();
            $table->string('image',100)->nullable(false);
            $table->string('miniature',100)->nullable();
            $table->boolean('fragile')->nullable();
            $table->decimal('unitary_value',15,2)->nullable(false);
            $table->decimal('net_weight',15,2)->nullable(false);
            $table->integer('stock')->nullable(false);
            $table->string('tax_classification',10)->nullable();
            $table->decimal('icms',15,2)->nullable();
            $table->decimal('ipi',15,2)->nullable();
            $table->timestamp('last_sale')->nullable();
            $table->decimal('cost_price',15,2)->nullable();
            $table->boolean('active')->default(true)->nullable();
            $table->timestamps();
            //foreign key
            $table->integer('category_id');

            $table->foreign('category_id')
                ->references('id')
                ->on('category');
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
