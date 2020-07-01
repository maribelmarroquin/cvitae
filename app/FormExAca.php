<?php

namespace App;
use DB;
use Carbon\Carbon;
use Auth;

use Illuminate\Database\Eloquent\Model;

class FormExAca extends Model
{
    protected $table = 'form_ex_acas';
    protected $primaryKey = 'id_form_exaca';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['curso', 'desc', 'instituto', 'duración', 'doc_ex', 'ruta_docex', 'principal', 'principal_vista', 'fk_user_fe'];

    public function users() {
		return $this->belongs_to('User');
	}

    public function setRutaDocExAttribute($ruta_docex){
        $nameUser = Auth::user('users')->name;
        if (!empty($ruta_docex)) {
            $nameDocex = Carbon::now()->day.Carbon::now()->month.Carbon::now()->year.'_'.Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.'_'.$ruta_docex->getClientOriginalName();
            $this->attributes['ruta_docex']=$nameDocex;
            \Storage::disk('public')->put("$nameUser/docs/$nameDocex", \File::get($ruta_docex));
        }
        
    }
    public function getUrlPathAttribute(){
        return \Storage::url($this->ruta_docex);
    }
}
 