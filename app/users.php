<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $fillable = ['id' , 'name' , 'email_verified_at' , 'email' , 'password' , 'user_id'];
  
    public $timestamps = false;

   
    public function orders(){
        return $this->hasMany(orders::class,'user_id','id')->get();
    }
}

