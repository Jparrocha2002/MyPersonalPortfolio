<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
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
        $experiences = Experience::orderBy('created_at', 'DESC')->get();

        return view('experiences.index', compact('experiences'));
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
        $experiences = new Experience();

        $experiences->job_title = $request->input('job_title');
        $experiences->company = $request->input('company');
        $experiences->date = $request->input('date');
        $experiences->responsibility = $request->input('responsibility');

        $experiences->save();

        return redirect()->route('experiences.index')->with('success','Added Successfully');
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
        $experiences = Experience::findOrFail($id);

        $experiences->job_title = $request->input('job_title');
        $experiences->company = $request->input('company');
        $experiences->date = $request->input('date');
        $experiences->responsibility = $request->input('responsibility');

        $experiences->save();

        return redirect()->route('experiences.index')->with('update','Updated Successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experiences = Experience::findOrFail($id);
        
        $experiences->delete();

        return redirect()->route('experiences.index')->with('error', 'Deleted Successfully');
    }
}
