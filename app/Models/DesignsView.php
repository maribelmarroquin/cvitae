<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignsView extends Model
{
    protected $table = 'catdesigns_view';
    protected $primaryKey = 'id_designs_view';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['design_view', 'vigencia_ini', 'vigencia_fin'];
}
