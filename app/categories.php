<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = "categories";
    protected $fillable = [
        'id','name_ar','name_en','parent_id','image','created_at','updated_at'];

    public function childs() {
        return $this->hasMany('App\categories','parent_id','id') ;
    }

}
