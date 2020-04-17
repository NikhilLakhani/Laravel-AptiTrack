<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validat extends Controller
{
    public function submit(Request $req)
    {
        $req->validate([
            'name'=>'required|alpha_num',
            'name1'=>'same:name',
            'email'=>'email',
            'age'=>'required|integer|min:18|max:25',
            'gender'=>'required',
            'date'=>'required|date',
            'numb'=>'gte:55|lt:60|digits_between:2,4'
        ]);
        $req->session()->put('my_name','LPU');
        print_r($req->input());
    }
}