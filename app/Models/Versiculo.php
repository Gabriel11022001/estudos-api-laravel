<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Versiculo extends Model
{
    use HasFactory;

    protected $timestamps = false;
    protected $fillable = ['id', 'numero', 'texto_versiculo', 'capitulo_id'];

    public function capitulo() {

        return $this->belongsTo(Capitulo::class);
    }
}
