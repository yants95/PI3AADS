<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkArduino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('arduino', function (Blueprint $table) {
            $table->foreign('arduino_aquario_id', 'fk_aquario')->references('id')->on('aquarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('arduino', function($table) {
            $table->dropColumn('arduino_aquario_id');
        });
    }
}
