<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sharedcapitals extends Model
{
    protected $fillable = [
        'member_id',
        'capital',
        'ornumber'
    ];
}
