<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_group extends Model
{
    protected $fillable = [
        'id', 'user_id', 'group_id'
    ];

}
