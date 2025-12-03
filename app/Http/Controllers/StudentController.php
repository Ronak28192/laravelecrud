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
         $validated = $request->validate([
                        'name' => 'required|alpha|max:50',
                        'email' => 'required',
                    ]);
        $s1 = new student();
         $s1->name = $request->input("name");
         $s1->email  = $request->input("email");
         $s1->mobile = $request->input("mobile");
         $s1->age = $request->input("age");
         $s1->marks = $request->input("marks");
         $s1->city = $request->input("city");
         $s1->Images = "laptop.jpg";

         if($s1->save())
         {
            echo"Record inserted successfully";
         }
                    
        

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
