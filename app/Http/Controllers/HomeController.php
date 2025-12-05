<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $profile  = Profile::first();
        $skills   = Skill::latest()->get();
        $projects = Project::latest()->get();

        return view('home', compact('profile','skills','projects'));
    }

    // ✅ New project details page
    public function projectShow(Project $project)
    {
        $profile = Profile::first(); // for navbar title
        return view('projects.show', compact('project','profile'));
    }
}
