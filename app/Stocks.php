<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    //
    protected $fillable = [
        'id',
        'item_id',
        'qty',
        'created_by',
        'updated_by',
        'status',
        'created_at',
        'updated_at'
    ];
}
