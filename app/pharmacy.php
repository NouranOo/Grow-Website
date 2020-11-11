<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pharmacy extends Model
{
    //14
    protected $fillable=array('id','pharmacy_name','pharmacy_address',
                              'pharmacy_license','union_license',
                              'owner_name','email','commerical_registration',
                              'region','tax_card','available_time',
                              'branch_number', 'setting','verified','area_id' );

     public function companies(){
            return $this->belongsToMany('App\company','rates');
    }
    public function orders(){
        return $this->hasMany('App\order');
    }
    public function area(){
        return $this->belongsTo('App\area');
    }
                             
                             
}
