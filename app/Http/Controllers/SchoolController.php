<?php

namespace App\Http\Controllers;

use App\school;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $Request)
    {
        // first type, when form id/name and database collumn name is same
        school::create($Request->all());


        // second type, when form id/name and database collumn name is not same
        // school::create([
        //     'school_name'=>$Request->school_name,
        //     'school_email'=>$Request->school_email,
        //     'school_phone'=>$Request->school_phone,
        //     'school_password'=>$Request->school_password,
        // ]);


        // third type, when form id/name and database collumn name is not same (prototype style)
        // $query = new school();
        // $query->school_name = $Request->school_name;
        // $query->school_email = $Request->school_email;
        // $query->school_phone = $Request->school_phone;
        // $query->school_password = $Request->school_password;
        // $query->save();

        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\school  $school
     * @return \Illuminate\Http\Response
     */
    public function show(school $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\school  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(school $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\school  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, school $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\school  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(school $school)
    {
        //
    }
}
