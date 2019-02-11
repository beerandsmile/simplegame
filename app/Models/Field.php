<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $fillable = [
        'author', 'player', 'winner', 'current', 'state', 'hash',
    ];
}
