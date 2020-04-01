<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('store', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',40)->nullable(false);
            $table->string('telephone',20);
            $table->string('email',40);
            $table->string('street',80);
            $table->string('number',6);
            $table->string('complement',120);
            $table->string('neighborhood',6);
            $table->string('cep',10);
            $table->string('city',40);
            $table->string('state',2);
            $table->string('country',40);
            $table->string('logo',120);
            $table->string('logo_footer',120);
            $table->string('facebook',150);
            $table->string('twitter',150);
            $table->string('instagram',150);
            $table->string('google_play',150);
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
        Schema::dropIfExists('store');
    }
}
