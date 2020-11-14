<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    protected $dates = ['dob'];

    public function setDobAttribbute($dob)
    {
        $this->attributes['dob'] = Carbon::parse($dob);
    }
}
