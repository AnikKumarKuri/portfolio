<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(6)->get();
        $skills = Skill::orderBy('name')->get();

        return view('home', compact('projects', 'skills'));
    }
}
