<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // echo"index";

        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // echo"create";
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // echo"store";
        $request->validate([
        'name'   => 'required|min:3|max:50',
        'email'  => 'required|email|unique:students,email',
        'mobile' => 'required|digits:10',
        'age'    => 'required|integer|min:1|max:100',
        'marks'  => 'required|numeric|min:0|max:100',
        'city'   => 'required|string|max:50',
        'img'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048', // 2MB
    ]);

    // Image upload
    $filename = null;
    if ($request->hasFile('img')) {
        $filename = time() . '.' . $request->img->extension();
        $request->img->move(public_path('uploads'), $filename);
    }

    // Insert data
    Student::create([
        'name'   => $request->name,
        'email'  => $request->email,
        'mobile' => $request->mobile,
        'age'    => $request->age,
        'marks'  => $request->marks,
        'city'   => $request->city,
        'images'    => $filename,
    ]);

    return redirect('/student')->with('status', 'Student Added Successfully!');
                    
        

    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
        echo"show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
        echo"edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentRequest $request, student $student)
    {
        //
        echo"update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
        echo"destroy";
    }
}
