<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //9
    protected $fillable=array('id','status','rate',
                              'seen','notes','feedback',
                              'description','product_id',
                              'pharmacy_id','company_id');

    public function pharmacy(){
        return $this->belongsTo('App\pharmacy');
    }
    public function products(){
        return $this->belongsToMany('App\product','product_orders');
    }
    public function company(){
        return $this-> belongsTo('App\company');
    }
}
