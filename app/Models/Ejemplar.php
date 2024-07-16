<?php

namespace App\Models;

use App\Http\Controllers\LibroController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    use HasFactory;
    public function libro(){
        return $this->belongsTo(Libro::class);
    }

    public function usuarios(){
        return $this->belongsToMany(Usuario::class);
    }
}
