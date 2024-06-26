<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skills::orderBy('created_at', 'DESC')->get();
  
        return view('skills.index', compact('skills'));
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
        $skills = new Skills();

        $skills->skill_name = $request->input('skill_name');
        $skills->percent = $request->input('percent');

        $skills->save();

        return redirect()->route('skills.index')->with('success', 'Added Successfully');
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
        $skills = Skills::findOrFail($id);

        $skills->skill_name = $request->input('skill_name');
        $skills->percent = $request->input('percent');

        $skills->save();

        return redirect()->route('skills.index')->with('update', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills = Skills::findOrFail($id);
  
        $skills->delete();
  
        return redirect()->route('skills.index')->with('error', 'Deleted Successfully');
    }
}
