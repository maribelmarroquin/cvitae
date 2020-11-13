<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
use Auth;

class DatosPer extends Model
{
    protected $table = 'datos_pers';
    protected $primaryKey = 'id_datos_per';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ruta', 'nombre', 'profesion', 'fecha_nac', 'lugar_nac', 'edo_civil', 'direccion', 'telefono', 'email_u', 'sitio', 'fk_user_dp'];


    public function setRutaAttribute($ruta){
        $user = auth()->user();
        $nameUser = $user['name'];
        
        \Storage::disk('public')->delete("$nameUser/id/$this->ruta");


        if (!empty($ruta)) {
            $name = Carbon::now()->day.Carbon::now()->month.Carbon::now()->year.'_'.Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.'_'.$ruta->getClientOriginalName();
            $this->attributes['ruta']=$name;
            \Storage::disk('public')->put("$nameUser/id/$name", \File::get($ruta));
        }
        
    }

    public function getUrlPathAttribute(){
        return \Storage::url($this->ruta);
    }

    public function users() {
        return $this->belongs_to('User');
    }
}
