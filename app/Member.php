<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'ename',
        'gender',
        'birthdate',
        'placeofbirth',
        'civil_status',
        'occupation',
        'contactnumber',
        'validno',
        'tin',
        'unique_id_num',
        'street',
        'barangay',
        'municipality',
        'province',
        'areatilage',
        'location',
        'othersource',
        'tenurialstatus',
        'passbooknumber',
        'emailaddress',
        'sharedcapital_id',
        'ornumber',
        'profile_pic',
        'status'
    ];
}
