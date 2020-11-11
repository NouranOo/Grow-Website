<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable=array('id','name_ar_eg','name_en_us',
                              'active','stock','price','tax_card',
                               'discount_percentage','discount_buy',
                               'discount_get','quota_product_limit',
                               'quota_order_limit','company_id','area_id');

    public function companies(){
        return $this->belongsToMany('App\company','company_products');
    }
    public function orders(){
        return $this->belongsToMany('App\order','product_orders');
    }
    public function areas(){
        return $this->belongsToMany('App\area','product_areas');
    }
}
