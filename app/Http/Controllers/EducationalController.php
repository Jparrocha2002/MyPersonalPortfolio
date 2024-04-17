<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Educational;

class EducationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(empty(auth()->user()->role))
        {
            abort(404);
        } else {
        $educationals = Educational::orderBy('created_at', 'DESC')->get();
            
        return view('educationals.index', compact('educationals'));
        }
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $educationals = new Educational();

        $educationals->school_type = $request->input('school_type');
        $educationals->school_name = $request->input('school_name');
        $educationals->date = $request->input('date');
        $educationals->address = $request->input('address');

        $educationals->save();

        return redirect()->route('educationals.index')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $educationals = Educational::findOrFail($id);

        $educationals->school_type = $request->input('school_type');
        $educationals->school_name = $request->input('school_name');
        $educationals->date = $request->input('date');
        $educationals->address = $request->input('address');

        $educationals->save();

        return redirect()->route('educationals.index')->with('update', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $educationals = Educational::findOrFail($id);
  
        $educationals->delete();
  
        return redirect()->route('educationals.index')->with('error', 'Deleted Successfully');
    }
}
