<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    use HasFactory;

    protected $timestamps = false;
    protected $fillable = ['id', 'numero', 'titulo', 'livro_id'];

    public function livro() {

        return $this->belongsTo(Livro::class);
    }

    public function versiculos() {

        return $this->hasMany(Versiculo::class);
    }
}
