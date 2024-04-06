<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $admin = User::orderBy('created_at', 'DESC')->get();
  
        return view('admin.index', compact('admin'));
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
        $admin = new User();
        $admin->role = $request->input('role');
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = bcrypt($request->input('password'));

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $admin->avatar = $avatarPath;
        }

        $admin->save();

        return redirect()->route('admin.index')->with('success', 'User created successfully');
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
        $admin = User::findOrFail($id);

        $admin->role = $request->input('role');
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');

    if ($request->hasFile('avatar')) {
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        $admin->avatar = $avatarPath;
    }

    $admin->save();

    return redirect()->route('admin.index')->with('success', 'User updated successfully');

    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = User::findOrFail($id);
  
        $admin->delete();
  
        return redirect()->route('admin.index')->with('success', 'User deleted successfully');
    }
}
