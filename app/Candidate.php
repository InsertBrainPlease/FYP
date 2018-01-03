<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Candidate extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'no_matric', 'sem', 'faculty', 'motto', 'program', 'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
