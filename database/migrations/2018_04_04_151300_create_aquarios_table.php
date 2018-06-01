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
            $table->increments('pk_aquario');

            $table->date('data_montagem');
            $table->double('largura');
            $table->double('comprimento');
            $table->double('altura');
            $table->string('descricao', 500);
            $table->double('valor');
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
        Schema::dropIfExists('aquarios');
    }
}
