<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resumen extends Model
{
    protected $table = 'resumens';
	protected $primaryKey = 'id_resumen';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['titulo', 'resumen', 'principal', 'principal_vista', 'fk_user_re'];

	public function users() {
		return $this->belongs_to('User');
	}

	public function scopeTitulo($query, $titulo) {
    	if ($titulo) {
    		return $query->where('titulo','like',"%$titulo%");
    	}
    }

    public function scopeResumen($query, $resumen) {
    	if ($resumen) {
    		return $query->where('resumen','like',"%$resumen%");
    	}
    }

    public function scopePrincipal($query, $principal) {
    	if ($principal) {
    		return $query->where('principal', '=', $principal);
    	}
    }

    public function scopePrincipalVista($query, $principal_vista) {
    	if ($principal_vista) {
    		return $query->where('principal_vista','=', $principal_vista);
    	}
    }

}
