<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCanalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('canal', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->float('consumo_total', 10);
			$table->integer('arduino_id')->nullable()->index('fk_arduino');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('canal');
	}

}
