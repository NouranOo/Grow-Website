<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    //
    protected $fillable=array('id','name');
    public function products(){
        return $this->belongsToMany('App\product','product_areas');
    }
    public function pharmacy(){
        return $this->hasMany('App\pharmacy');
    }
}
