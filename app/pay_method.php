<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pay_method extends Model
{
    //
    protected $fillable=array('id','name','slug');

    public function company(){
        return $this->hasOne('App\pay_method');
    }
}
