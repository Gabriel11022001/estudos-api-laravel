<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versiculos', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->integer('numero')
                ->nullable(false);
            $table->text('texto_versiculo')
                ->nullable(false);
            $table->unsignedBigInteger('capitulo_id')
                ->nullable(false);
            /**
             * abaixo estou definindo que a coluna capitulo_id será a chave
             * estrangeira relacionada a coluna id da tabela capitulos
             */
            $table->foreign('capitulo_id')
                ->references('id')
                ->on('capitulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('versiculos');
    }
};
