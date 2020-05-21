<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['title', 'description'];

    public function cursos () 
    {
        return $this->belongsToMany(Curso::class, 'matriculas', 'aluno_id', 'curso_id')->withTimestamps();
    }
}
