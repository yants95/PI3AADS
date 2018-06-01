<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->increments('id');

            $table->datetime('data');
            $table->float('ph', 10, 0);
            $table->integer('salinidade');
            $table->integer('calcio');
            $table->integer('magnesio');
            $table->integer('reserva_alcalina');
            $table->integer('amonia');
            $table->integer('nitrito');
            $table->integer('nitrato');
            $table->integer('fosfato');
            $table->integer('silica');
            $table->unsignedInteger('aquario_id');
            $table->foreign('aquario_id', 'fk_aquario')->references('id')->on('aquarios')->onUpdate('CASCADE')->onDelete('CASCADE');

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
        Schema::dropIfExists('parametros');
    }
}
