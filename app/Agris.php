<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agris extends Model
{
    //
    protected $fillable = [
        'item_name',
        'item_code',
        'item_description',
        'created_by',
        'updated_by',
        'status'
    ];
}
