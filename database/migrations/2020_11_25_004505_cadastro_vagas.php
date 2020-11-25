<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CadastroVagas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id('id');
            $table->text('nome_vaga');
            $table->text('pais');
            $table->text('cidade');
            $table->text('estado');
            $table->text('departamento');
            $table->text('tipo_emprego');
            $table->longText('descricao_html');
            $table->text('descricao_formatada');
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
        Schema::drop('vagas');
    }
}
