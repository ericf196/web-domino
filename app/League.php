<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_league', 'description', 'state', 'city', 'address', 'name_admin','email','phone','user_id',
    ];


}