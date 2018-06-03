<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParametrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parametros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->dateTime('data');
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
			$table->integer('aquario_id')->unsigned()->index('fk_aquario');
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
		Schema::drop('parametros');
	}

}
