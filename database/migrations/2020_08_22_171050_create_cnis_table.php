<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->string('prenom');
            $table->string('nom');
            $table->string('genre');
            $table->longText('age');
            $table->string('cni_numero');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('departement');
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
        Schema::dropIfExists('cnis');
    }
}
