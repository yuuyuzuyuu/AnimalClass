<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'center_id', 'image1', 'image2', 'image3', 'name', 'age', 'gender', 'type', 'animal_type', 'introduction', 'active_status',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class);
    }

    public function informations()
    {
        return $this->hasMany(Information::class);
    }

    // 動物の種類取得
    public function getCatsTypeNameAttribute() {
        return config('type.Cats.'.$this->type);
    }

    public function getDogsTypeNameAttribute() {
        return config('type.Dogs.'.$this->type);
    }

    // 動物の年齢取得
    public function getAgeNameAttribute() {
        return config('age.'.$this->age);
    }
    
    // いいねしているユーザの取得
    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'animal_id', 'user_id')->withTimestamps();
    }
}
