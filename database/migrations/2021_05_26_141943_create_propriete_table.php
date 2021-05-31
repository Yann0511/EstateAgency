<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprieteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('adresse', 100);
            $table->string('description', 500);
            $table->integer('prix');
            $table->integer('superficie');
            $table->integer('chambre');
            $table->integer('douche');
            $table->integer('garage');
            $table->bigInteger('user_id');
            $table->foreign('user_id')
                                      ->references('id')
                                      ->on('users');
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
        Schema::dropIfExists('proprietes');
    }
}
