<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LedStatus extends Model
{
    protected $fillable = [
        'id', 'flag', 'data', 'cliendid', 'led1', 'led2', 'led3', 'remakes'
    ];
}
