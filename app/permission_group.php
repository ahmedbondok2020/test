<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permission_group extends Model
{
    protected $fillable = [
        'id', 'group_name'
    ];

}
