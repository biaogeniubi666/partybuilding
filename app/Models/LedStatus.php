<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LedStatus extends Model
{
    protected $fillable = [
        'led1', 'led2', 'led3'
    ];
}
