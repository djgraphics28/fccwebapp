<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sharedcapitals extends Model
{
    protected $fillable = [
        'user_id',
        'capital',
        'ornumber'
    ];
}
