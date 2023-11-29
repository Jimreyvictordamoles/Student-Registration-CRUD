<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students\index')->with('students',$students);
    }

    public function create()
    {
        return view('students\create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'required',
            'section' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'studentnum' => 'required|numeric',
            'lrnno' => 'required|numeric',
            'homeaddress' => 'required',
            'emailaddress' => 'required',
            'mobile' => 'required',
            'gradelvl' => 'required',
            'strand' => 'required',
        ]);

        Student::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'middlename' => $request->input('middlename'),
            'section' => $request->input('section'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'studentnum' => $request->input('studentnum'),
            'lrnno' => $request->input('lrnno'),
            'homeaddress' => $request->input('homeaddress'),
            'emailaddress' => $request->input('emailaddress'),
            'mobile' => $request->input('mobile'),
            'gradelvl' => $request->input('gradelvl'),
            'strand' => $request->input('strand'),
        ]);

        return redirect()->route('students\index')->with('success', 'Student ADDED!');
    }

    public function show($id)
    {
        $students = Student::findOrFail($id);

        if (!$students) {
            // Handle the case where the inventory item is not found.
            // You might want to redirect to an error page or display a message.
            return redirect()->route('students\index')->with('error', 'Students INFO not Found.');
        }
    

        return view('students\show', compact('students'));
    }

    public function edit($id)
    {
        // Find the inventory item by ID
        $students = Student::find($id);

        // Check if the inventory item exists
        if (!$students) {
            // Handle the case where the inventory item is not found.
            // You might want to redirect to an error page or display a message.
            return redirect()->route('students\index')->with('error', 'Students INFO not Found.');
        }

        // Pass the inventory item to the view
        return view('students\edit', compact('students'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'required',
            'section' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'studentnum' => 'required|numeric',
            'lrnno' => 'required|numeric',
            'homeaddress' => 'required',
            'emailaddress' => 'required',
            'mobile' => 'required',
            'gradelvl' => 'required',
            'strand' => 'required',
        ]);
    
        $students = Student::find($id);
    
        // Check if the inventory item exists
        if (!$students) {
            // Handle the case where the inventory item is not found.
            // You might want to redirect to an error page or display a message.
            return redirect()->route('students\index')->with('error', 'Student NOT UPDATED.');
        }
    
        // Update the inventory item with the new data
        $students->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'middlename' => $request->input('middlename'),
            'section' => $request->input('section'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'studentnum' => $request->input('studentnum'),
            'lrnno' => $request->input('lrnno'),
            'homeaddress' => $request->input('homeaddress'),
            'emailaddress' => $request->input('emailaddress'),
            'mobile' => $request->input('mobile'),
            'gradelvl' => $request->input('gradelvl'),
            'strand' => $request->input('strand'),
        ]);
    
        return redirect()->route('students\index')->with('success', 'Student UPDATED successfully!');
    }
    public function destroy($id)
    {
        $students = Student::find($id);

        // Check if the item was found
        if (!$students) {
            return redirect()->route('students\index')->with('error', 'Student INFO NOT Found.');
        }

        // Delete the inventory item
        $students->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('students\index')->with('success', 'Student INFO DELETED successfully.');
    }
}