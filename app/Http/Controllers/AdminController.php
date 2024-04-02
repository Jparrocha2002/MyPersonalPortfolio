<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
        $profile = User::findorFail($id);

        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Retrieve existing user profile
        $profile = User::findOrFail($id);

        // Update user profile attributes with new values from the request
        $profile->role = $request->input('role');
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->job = $request->input('job');
        $profile->birthday = $request->input('birthday');
        $profile->age = $request->input('age');
        $profile->gender = $request->input('gender');
        $profile->phone = $request->input('phone');
        $profile->address = $request->input('address');
        $profile->religion = $request->input('religion');
        $profile->status = $request->input('status');
        $profile->description = $request->input('description');
        $profile->fb_link = $request->input('fb_link');
        $profile->instagram_link = $request->input('instagram_link');
        $profile->linkedin_link = $request->input('linkedin_link');
        $profile->github_link = $request->input('github_link');

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $profile->avatar = $avatarPath;
        }

        $profile->save();

        return redirect()->route('home')->with('update_success', 'User updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
