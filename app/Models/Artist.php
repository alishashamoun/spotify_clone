<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function events()
    {
        return $this->hasMany(event::class);
    }
    public function tracks()
    {
        return $this->hasMany(track::class);
    }
}
