<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
        
        protected $fillable = ['id','user_id','billing_email','billing_name','billing_address','billing_city','billing_province','billing_postalcode','billing_phone','billing_name_on_card','billing_discount','billing_discount_code','billing_subtotal','billing_tax','billing_total','payment_gateway','shipped','error'];      

    public $timestamps = false;

    public function users(){
        return $this->belongsTo(users::class,'user_id','id')->first();
    }
   
    public function order_product(){
        return $this->hasMany(order_product::class,'order_product_id','id')->get();
    }


}