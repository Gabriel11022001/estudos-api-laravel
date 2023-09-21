<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up() {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome')
                ->nullable(false)
                ->max(255);
            $table->string('login')
                ->nullable(false)
                ->unique()
                ->max(255);
            $table->string('senha')
                ->nullable(false)
                ->max(25)
                ->min(6);
            $table->boolean('ativo')
                ->nullable(false)
                ->default(true);
        });
    }

    public function down() {
        Schema::dropIfExists('usuarios');
    }
};
