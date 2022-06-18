<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{    
    protected $fillable=[    'products','id','des','image','price','name','details','description'];
   
    public function order_product(){
        return $this->hasMany(order_product::class,'order_product_id','id')->get();
    }
 
    public function category() {
        return $this->belongsTo(category::class,'category_id','id')->first();
    }

}
