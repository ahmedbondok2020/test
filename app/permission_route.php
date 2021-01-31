<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permission_route extends Model
{
    protected $fillable = [
        'id', 'permission', 'group_id'
    ];

}
