<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDesignsView extends Model
{
    protected $table = 'user_designs_view';
    protected $primaryKey = 'id_user_designs_view';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['design_view', 'fk_user_design_view', 'vigencia_ini_view', 'vigencia_fin_view'];
}
