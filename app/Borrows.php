<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrows extends Model
{
    protected $fillable = [
        'member_id',
        'typeofloan',
        'typeofcashloan',
        'agri_item',
        'qty',
        'unit',
        'amount',
        'totalamount',
        'micro',
        'days',
        'interest'

    ];
}
