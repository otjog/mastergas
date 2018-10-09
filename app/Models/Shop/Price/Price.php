<?php

namespace App\Models\Shop\Price;

use Illuminate\Database\Eloquent\Model;

class Price extends Model{

    protected $fillable = ['name'];

    public function products(){
        return $this->belongsToMany('App\Models\Shop\Product\Product', 'product_has_price')->withPivot('value', 'currency_id')->withTimestamps();
    }

}
