<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
use Auth;

class FormAca extends Model
{
    protected $table = 'form_acas';
    protected $primaryKey = 'id_form_aca';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nivel', 'especialidad', 'instituto', 'ano_ini', 'ano_fin', 'status', 'doc', 'ruta_doc', 'principal', 'principal_vista', 'fk_user_fa', 'order_fa'];

    public function users() {
		return $this->belongs_to('User');
	}

    public function setRutaDocAttribute($ruta_doc){
        $nameUser = Auth::user('users')->name;
        if (!empty($ruta_doc)) {
            $nameDoc = Carbon::now()->day.Carbon::now()->month.Carbon::now()->year.'_'.Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.'_'.$ruta_doc->getClientOriginalName();
            $this->attributes['ruta_doc']=$nameDoc;
            \Storage::disk('public')->put("$nameUser/docs/$nameDoc", \File::get($ruta_doc));
        }
        
    }

    public function getUrlPathAttribute(){
        return \Storage::url($this->ruta_doc);
    }
}
