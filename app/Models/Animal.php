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
    
    // // 動物の種類取得
    // public function getCatsNameAttribute() {
    //     return config('cats.'.$this->type);
    // }
    
    // 動物の年齢取得
    // public function getAgeAttribute() {
    //     return config('age.'.$this->age);
    // }
}
