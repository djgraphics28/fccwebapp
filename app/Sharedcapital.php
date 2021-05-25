<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sharedcapital extends Model
{
    protected $fillable = [
        'member_id',
        'capital',
        'ornumber'
    ];
}
