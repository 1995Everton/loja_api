<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('street',80)->nullable(false);
            $table->string('number',6)->nullable(false);
            $table->string('complement',40)->nullable();
            $table->string('neighborhood',40)->nullable();
            $table->string('cep',10)->nullable();
            $table->string('city',40)->nullable();
            $table->string('state',2)->nullable();
            $table->string('country',40)->nullable();
            $table->timestamps();
            //foreign key
            $table->integer('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
    }
}
