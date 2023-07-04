<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    protected $table = "alumnos";

    public function curso(): BelongsTo{
        return $this->belongsTo(Curso::class,'curso_id');
    }
    public function recrutador(): BelongsTo{
        return $this->belongsTo(Recrutador::class,'recrutadore_id');
    }
    public function servicios(): BelongsToMany{
        return $this->belongsToMany(Servicio::class,'alumno_servicios','alumno_id');
    }
    
}
