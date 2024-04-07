<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Skills;
use App\Models\Experience;
use App\Models\Educational;
use App\Models\Works;
use App\Models\Contact;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userCount = User::count();
        $experienceCount = Experience::count();
        $educationalCount = Educational::count();
        $workCount = Works::count();
        $blogCount = Blog::count();
        $skillCount = Skills::count();
        $messageCount = Contact::count();
        
        return view('home', compact('userCount','experienceCount','educationalCount','workCount','blogCount','skillCount','messageCount'));
    }
}