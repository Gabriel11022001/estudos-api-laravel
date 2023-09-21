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
        Schema::create('capitulos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')
                ->nullable(false)
                ->unique();
            $table->text('titulo')
                ->nullable(true);
            $table->unsignedBigInteger('livro_id')
                ->nullable(false);
            /**
             * abaixo estou definindo que a coluna livro_id vai ser a chave estrangeira
             * que está relacionada a coluna id da tabela livros.
             */
            $table->foreign('livro_id')
                ->references('id')
                ->on('livros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capitulos');
    }
};
