<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjProf extends Model
{
    protected $table = 'obj_profs';
    protected $primaryKey = 'id_obj';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['objetivo', 'des_obj', 'principal', 'fk_user_op'];

    public function users() {
		return $this->belongs_to('User');
	}
}
