<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Servicio extends Model
{
    use HasFactory;
    protected $table = "servicios";
    public function alumnos(): BelongsToMany{
        return $this->belongsToMany(Student::class,"alumno_servicios");
    }
}
