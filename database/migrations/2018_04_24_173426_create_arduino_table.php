<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArduinoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('arduino', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('ip', 15);
			$table->string('mac_address', 100)->nullable();
			$table->integer('arduino_aquario_id')->unsigned()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('arduino');
	}

}
