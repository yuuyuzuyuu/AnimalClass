<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'nickname', 'tel', 'pref',
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

    public function getPrefNameAttribute() {
        return config('pref.'.$this->pref);
    }

    public static $editRules = array (
        'password' => 'comfirmed'
    );

    // Userクラスがfavoritesテーブルを通してAnimalクラスとつながっている
    public function favorites()
    {
        return $this->belongsToMany(Animal::class, 'favorites', 'user_id', 'animal_id')->withTimestamps();
    }

    // いいねをつける
    public function favorite($animalId)
    {
        $exist = $this->is_favorite($animalId);

        if($exist) {
            return false;
        } else {
            $this->favorites()->attach($animalId);
            return true;
        }
    }

    // いいねを外す
    public function unfavorite($animalId)
    {
        $exist = $this->is_favorite($animalId);

        if($exist) {
            $this->favorites()->detach($animalId);
            return true;
        } else {
            return false;
        }
    }

    // すでにいいねしているか？
    public function is_favorite($animalId)
    {
        return $this->favorites()->where('animal_id', $animalId)->exists();
    }
    
    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }
    
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
