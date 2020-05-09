<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
use Auth;

class Otros extends Model
{
    protected $table = 'otros';
    protected $primaryKey = 'id_otros';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['dato', 'des_dato', 'ruta_dato', 'principal', 'fk_user_o'];

    public function setRutaDatoAttribute($ruta_dato){
        $nameUser = Auth::user('users')->name;
        if (!empty($ruta_dato)) {
            $nameDato = Carbon::now()->day.Carbon::now()->month.Carbon::now()->year.'_'.Carbon::now()->hour.Carbon::now()->minute.Carbon::now()->second.'_'.$ruta_dato->getClientOriginalName();
            $this->attributes['ruta_dato']=$nameDato;
            \Storage::disk('public')->put("$nameUser/docs/$nameDato", \File::get($ruta_dato));
        }
        
    }

    public function getUrlPathAttribute(){
        return \Storage::url($this->ruta);
    }
}
