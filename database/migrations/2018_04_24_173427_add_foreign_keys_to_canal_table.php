<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCanalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('canal', function(Blueprint $table)
		{
			$table->foreign('arduino_id', 'fk_arduino')->references('id')->on('arduino')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('canal', function(Blueprint $table)
		{
			$table->dropForeign('fk_arduino');
		});
	}

}
