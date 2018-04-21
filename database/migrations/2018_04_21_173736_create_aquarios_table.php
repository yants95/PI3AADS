<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAquariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aquarios', function (Blueprint $table) {
            $table->increments('id');

            $table->datetime('data_montagem');
            $table->float('largura', 10, 0);
            $table->float('comprimento', 10, 0);
            $table->float('altura', 10, 0);
            $table->string('descricao', 500);
            $table->float('valor', 10, 0);
            $table->unsignedInteger('users_id');
            $table->foreign('users_id', 'fk_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->datetime('data_desmontagem');


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
        Schema::dropIfExists('aquarios');
    }
}
