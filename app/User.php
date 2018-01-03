<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Traits\ShinobiTrait;


class User extends Authenticatable
{
    use Notifiable;
    use ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'league_id', 'nombres', 'apellidos', 'city', 'state', 'cedula', 'url_image', 'telefono', 'team', 'association',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function league()
    {
        return $this->hasOne(League::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'games', 'user_id', 'category_id');
    }

    public function league_player()
    {
        return $this->belongsTo(League::class);
    }

    public function categories_individual()
    {
        return $this->belongsToMany(Category::class, 'games_individual', 'user_id', 'category_id');
    }




}
