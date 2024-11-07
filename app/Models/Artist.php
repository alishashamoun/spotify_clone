<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];
    public function events()
    {
        return $this->hasMany(event::class);
    }
    public function albums()
    {
        return $this->hasMany(album::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function tracks()
    {
        return $this->hasMany(track::class);
    }
}
