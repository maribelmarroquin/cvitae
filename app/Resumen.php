<?php

namespace App;

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
	protected $fillable = ['titulo', 'resumen', 'principal','fk_user_re'];

	public function users() {
		return $this->belongs_to('User');
	}

}
