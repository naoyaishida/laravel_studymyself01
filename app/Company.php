<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //  protected $fillable = ['name','email','active','company_id'];
      public function customers()
    {
        // one to manyの記載をつける
        return $this->hasMany('App\Customer');
    }
}
