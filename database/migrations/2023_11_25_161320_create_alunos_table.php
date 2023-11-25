<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAlunosTable extends Migration
{
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('nome');
            $table->boolean('presenca')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}