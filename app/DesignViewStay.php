<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DesignViewStay extends Model
{
    protected $table = 'designview_stay';
    protected $primaryKey = 'id_view_stay';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['view_stay', 'fk_user_view'];
}
