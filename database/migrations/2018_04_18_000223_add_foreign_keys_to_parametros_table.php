<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToParametrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('parametros', function(Blueprint $table)
		{
			$table->foreign('aquario_id', 'fk_aquario')->references('id')->on('aquarios')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('parametros', function(Blueprint $table)
		{
			$table->dropForeign('fk_aquario');
		});
	}

}
