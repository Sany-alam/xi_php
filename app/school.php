<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    protected $fillable = [
        'school_name','school_email','school_phone','school_password'
    ];
}
