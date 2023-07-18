<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClasConocimientos extends Model
{
    protected $table = 'clas_conocimientos';
    protected $primaryKey = 'id_clas_conocimientos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['clasificacion', 'fk_user_clas_conocimientos'];
}
