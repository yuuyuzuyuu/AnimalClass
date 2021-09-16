<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Center extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tel', 'pref', 'address', 'postcode', 'homepage', 'instagram', 'twitter', 'facebook',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 都道府県データ取得
    public function getPrefNameAttribute() {
        return config('pref.'.$this->pref);
    }

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }

    public function informations()
    {
        return $this->hasMany(Information::class);
    }

    // 動物の数をロード
    public function loadAnimalCounts()
    {
        $this->loadCount('animals');
    }
    
    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }
}
