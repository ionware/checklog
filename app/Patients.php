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

    // A patient record has many check-ins.
    public function checkins()
    {
        return $this->hasMany('App\Checkin', 'record_id');
    }
}
