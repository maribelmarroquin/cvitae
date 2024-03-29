<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpProf extends Model
{
    protected $table = 'exp_profs';
    protected $primaryKey = 'id_exprof';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['empresa', 'cargo', 'funciones', 'jefe', 'telefono', 'inicio_lab', 'fin_lab', 'motivos', 'logros', 'principal', 'fk_user_ep'];
}
