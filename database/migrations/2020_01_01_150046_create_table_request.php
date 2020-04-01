<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('amount')->nullable(false);
            $table->decimal('price_total')->nullable(false);
            $table->boolean('status')->default(true);

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedBigInteger('address_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('user');

            $table->foreign('address_id')
                ->references('id')
                ->on('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request');
    }
}
