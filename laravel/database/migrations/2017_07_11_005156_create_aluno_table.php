<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',255);
            $table->string('matricula',255);
            $table->float('nota');
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
    Schema::drop('aluno');
    }
}
