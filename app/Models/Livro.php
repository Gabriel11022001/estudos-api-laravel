<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['id', 'nome', 'abreviacao'];

    public function capitulos() {

        // definindo que 1 livro está relacionado a N capitulos
        return $this->hasMany(Capitulo::class);
    }
}
