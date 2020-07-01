<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdioInfo extends Model
{
    protected $table = 'idio_infos';
    protected $primaryKey = 'id_idinfo';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['idi_info', 'nivel', 'clasificacion', 'principal', 'principal_vista', 'fk_user_ii'];

    public function users() {
		return $this->belongs_to('User');
	}
}
