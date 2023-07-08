<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHerramientasToExpProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exp_profs', function (Blueprint $table) {
            $table->string("herramientas")->nullable()->after('funciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exp_profs', function (Blueprint $table) {
            $table->dropColumn('herramientas');
        });
    }
}
