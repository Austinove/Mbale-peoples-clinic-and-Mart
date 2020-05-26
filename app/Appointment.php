<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'number',
        'appt_date',
        'message',
        'view'
    ];
}
