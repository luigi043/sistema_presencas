<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = ['nome'];
    
    public function presencas()
    {
        return $this->hasMany(Presenca::class);
    }
}