<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username',8)->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('email')->nullable(false)->unique();
            $table->boolean('manager')->default(false);
            $table->boolean('active',40)->default(false);
            // DADOS
            $table->string('name',40)->nullable(false);
            $table->string('telephone',40)->nullable();
            $table->string('genre',1)->nullable();
            $table->string('rg',10)->nullable();
            $table->string('cpf',11)->nullable();
            $table->dateTime('last_visit')->nullable();
            $table->integer('visits')->nullable();
            $table->string('token',255)->nullable();
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
        Schema::dropIfExists('usuario');
    }
}
