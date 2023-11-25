<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presenca extends Model
{
    protected $fillable = ['presente'];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }
}