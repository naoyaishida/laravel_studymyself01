<?php

namespace App\Http\Controllers;

// 新しいモデルを作った時はここにモデル名を入れる
use Illuminate\Http\Request;
use App\Customer;
use App\Company;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CustomerContoroller extends Controller
{
    public function index()
    {
        // どこから情報を持ってきているかを記載

        $customers = Customer::all();
        // $activeCustomers = Customer::active()->get();
        // $inactiveCustomers = Customer::inactive()->get();


        return view('customers.index',compact('customers'));
    }

    public function create()
    {
        $companies = Company::all();

        return view('customers.create',compact('companies'));
    }

    public function store(Request $request)
    {
        // まずはバリデーションをつける
        $this->validate($request,[
            'name' => 'required|min:3',
            'email'=> 'required|email',
            'active'=> 'required',
            'company_id'=>'required'
        ]);

        // バリデーションをつけたものをどこから取ってくるかをつける
        $customers = Customer::create([
            'name' => $request->name,
            'email'=> $request->email,
            'active'=> $request->active,
            'company_id'=>$request->company_id,
        ]);

        return redirect('customers');
    }


}
