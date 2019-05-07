<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Company extends Controller
{
    protected $guarded = [];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
