<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usertable extends Model
{
    use HasFactory;
    protected $table = "usertables";
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'status',

    ];
}
