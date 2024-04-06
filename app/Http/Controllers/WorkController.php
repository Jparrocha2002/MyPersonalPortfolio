<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Works;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Works::orderBy('created_at', 'DESC')->get();
  
        return view('works.index', compact('works'));
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
        $works = new Works();

        $works->name = $request->input('name');
        $works->link = $request->input('link');
        $works->type = $request->input('type');
        
        if ($request->hasFile('logo')) {
            $avatarPath = $request->file('logo')->store('Logo', 'public');
            $works->logo = $avatarPath;
        }

        $works->save();

        return redirect()->route('works.index')->with('success', 'Work created successfully');
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
        $works = Works::findOrFail($id);

        $works->name = $request->input('name');
        $works->link = $request->input('link');
        $works->type = $request->input('type');

        if ($request->hasFile('logo')) {
            $avatarPath = $request->file('logo')->store('Logo', 'public');
            $works->logo = $avatarPath;
        }
        
        $works->save();

        return redirect()->route('works.index')->with('success', 'Work Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $works = Works::findOrFail($id);
  
        $works->delete();
  
        return redirect()->route('works.index')->with('success', 'Work deleted successfully');
    }
}
