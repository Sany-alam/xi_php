<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Session;

class StudentController extends Controller
{
    public function create(Request $Request)
    {
        if (student::create($Request->all())) {
            session()->flash('msg-ok','Successfully added!');
            return redirect('/');
        }
        else {
            session()->flash('msg-ok','Something went wrong!');
            return redirect('/');
        }
    }

    public function show()
    {
        $data = student::orderBy('id','desc')->get();
        return view('index',['data'=>$data]);
    }
}
