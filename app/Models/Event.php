<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];
    protected function casts(): array
    {
        return [
            'event_date' => 'datetime',
        ];
    }
}
