<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresencasTable extends Migration
{
    public function up()
    {
        Schema::create('presencas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('disciplina_id');
            $table->boolean('presente');
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('presencas');
    }
};
