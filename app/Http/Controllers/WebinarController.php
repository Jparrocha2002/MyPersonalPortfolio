<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Webinar;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webinars = Webinar::orderBy('created_at', 'DESC')->get();
  
        return view('webinars.index', compact('webinars'));
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
        $webinars = new Webinar();

        $webinars->agenda = $request->input('agenda');
        $webinars->host_name = $request->input('host_name');
        $webinars->date = $request->input('date');
        

        if ($request->hasFile('webinar_img')) {
            $avatarPath = $request->file('webinar_img')->store('webinar', 'public');
            $webinars->webinar_img = $avatarPath;
        }

        $webinars->save();

        return redirect()->route('webinars.index')->with('success', 'Added Successfully');
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
        $webinars = Webinar::findOrFail($id);

        $webinars->agenda = $request->input('agenda');
        $webinars->host_name = $request->input('host_name');
        $webinars->date = $request->input('date');
        

        if ($request->hasFile('webinar_img')) {
            $avatarPath = $request->file('webinar_img')->store('webinar', 'public');
            $webinars->webinar_img = $avatarPath;
        }

        $webinars->save();

        return redirect()->route('webinars.index')->with('update', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $webinars = Webinar::findOrFail($id);
  
        $webinars->delete();
  
        return redirect()->route('webinars.index')->with('error', 'Deleted Successfully');
    }
}
