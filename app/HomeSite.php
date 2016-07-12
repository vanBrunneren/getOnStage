<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeSite extends Model
{
	use SoftDeletes;
	
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gos_homesite';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
