<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up() {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('nome')
                ->unique()
                ->nullable(false)
                ->max(255);
            $table->string('abreviacao')
                ->unique()
                ->nullable(false)
                ->min(2)
                ->max(2);
        });
    }

    public function down() {
        Schema::dropIfExists('livros');
    }
};
