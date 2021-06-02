<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $fillable = [
        'passbooknumber',
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
