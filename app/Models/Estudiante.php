<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    //NOMBRE DE LA TABLA
    public $table = "estudiantes";

    //DEFINE LOS ATRIBUTOS
    protected $fillable = [
        'nombre',
        'apellido',
        'estudiante_fecnac',
        'foto',
        'estudiante_dni',
        'estudiante_telf',
        'email',
    ];

    public function cursos(){
        //DEFINE LA RELACION MUCHOS A MUCHOS
        return $this->belongsToMany(Curso::class,"curso_estudiante");
    }
}
