<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    protected $guarded = ['record_id'];

    // A check-in belongs to a patient record
    public function record()
    {
        return $this->belongsTo('App\Patients');
    }
}
