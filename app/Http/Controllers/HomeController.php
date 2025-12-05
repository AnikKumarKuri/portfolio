<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Profile;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(6)->get();
        $skills   = Skill::orderBy('name')->get();
        $profile  = Profile::first();

        return view('home', compact('projects','skills','profile'));
    }
}
