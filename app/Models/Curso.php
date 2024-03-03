<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //NOMBRE DE LA TABLA
    public $table = "cursos";

    //DEFINE ATRIBUTOS
    protected $fillable = [
        'curso_nom',
        'estado',
        'docente_id',
        'grado_id'
    ];

    //DEFINE LA RELACION
    public function estudiantes(){
        return $this->belongsToMany(Estudiante::class,"curso_estudiante");
    }
}
