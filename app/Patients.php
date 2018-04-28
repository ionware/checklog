<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $table = 'records';

    // Guarded fields from mass assignment.
    protected $guarded = [
        "fullname",
        "id"
    ];
}
