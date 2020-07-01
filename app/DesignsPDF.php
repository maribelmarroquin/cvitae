<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignsPDF extends Model
{
    protected $table = 'catdesigns_pdf';
    protected $primaryKey = 'id_designs_pdf';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['design_pdf', 'vigencia_ini', 'vigencia_fin'];
}
