<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agris extends Model
{
    //
    protected $fillable = [
        'id',
        'item_name',
        'item_code',
        'item_description',
        'amount',
        'created_by',
        'updated_by',
        'status',
        'created_at',
        'updated_at'
    ];
}
