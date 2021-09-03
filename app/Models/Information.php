<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Information extends Model
{
    protected $fillable = ['content', 'animal_id', 'center_id'];

    protected $table = 'informations';

    public function center()
    {
        return $this->belongsTo(Center::class);
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
    
    
}
