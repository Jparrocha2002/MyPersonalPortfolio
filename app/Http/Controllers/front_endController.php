<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Works;
use App\Models\Skills;
use App\Models\Educational;
use App\Models\Experience;
use App\Models\Blog;
use App\Models\Webinar;


class front_endController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch users with the role of admin
        $admin = User::where('role', 'admin')->get();

        $skills = Skills::all();
        
        $works = Works::all();

        $educationals = Educational::all();

        $experiences = Experience::all();

        $blogs = Blog::all();

        $webinars = Webinar::all();


        // Pass the fetched data to the front-end view
        return view('welcome', ['admin' => $admin, 'skills' => $skills, 'works' => $works
        , 'educationals' => $educationals, 'experiences' => $experiences, 'blogs' => $blogs
        , 'webinars' => $webinars]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
