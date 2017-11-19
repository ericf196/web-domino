<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_category',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'games','category_id','user_id' );
    }
}
