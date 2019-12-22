<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('endereco', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('endereco');
            $table->integer('numero_casa');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('pais');
            $table->string('cep');
            $table->integer('user_id');
            $table->timestamps();

            $table->foreach('user_id')
                ->reference('id')
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
