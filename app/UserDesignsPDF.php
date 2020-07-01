<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDesignsPDF extends Model
{
    protected $table = 'user_designs_pdf';
    protected $primaryKey = 'id_user_designs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fk_design_pdf', 'fk_user_pdf', 'vigencia_ini_pdf', 'vigencia_fin_pdf'];
}
