<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAquariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aquarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('data_montagem');
			$table->float('largura', 10, 0);
			$table->float('comprimento', 10, 0);
			$table->float('altura', 10, 0);
			$table->string('descricao', 500);
			$table->float('valor', 10, 0);
			$table->integer('user_id')->unsigned()->index('fk_users');
			$table->date('data_desmontagem')->nullable();
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
		Schema::drop('aquarios');
	}

}
