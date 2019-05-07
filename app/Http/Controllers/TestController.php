<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller

{
    public function show(){
        echo "hello to my student";
    }


    public function last()
    {
        $data=[1=>'lohit',
               2=>'naoya'];

        return view('last',['item'=>$data]);
    }

    public function request2(Request $request)
    {
        $data=$request->input();
        print_r($data);
    }

    public function request3(Request $request,$id)
    {
        $data=$request->fullUrl();
        print_r($data);
    }

    public function show1(Request $request)
    {
        return view('forms');
    }

    public function save(Request $request)
    {
        print_r($request->input());
    }

    public function bs(){
        return view('bs');
    }

    public function bslogin()
    {
        return view('bslogin');
    }



    public function bsloginbt()
    {
        return view('bslogin');
    }
}



?>
