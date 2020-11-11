<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
    protected $fillable=array('id','email','news_content',
                              'offer_content','offer_title','tax_percentage',
                              'order_limit','currency',
                               'round','discount_type',
                               'verified','pay_method_id');

    public function products(){

        return $this->belongsToMany('App\produt','company_products');
    }
    public function pay_method(){
        return $this->belongsTo('App\pay_method');
    }
    public function pharmacies(){
        return $this->belongsToMany('App\pharmacy','rates');
    } 
    public function orders(){
        return $this->hasMany('App\order');
    }

}
