<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = [
        'active',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'connectable');
    }
}
