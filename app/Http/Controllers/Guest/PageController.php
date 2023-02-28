<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){


        $projects = Project::paginate(5);

        return view('guest.index', compact('projects'));


    }

    public function show(Project $project){


        return view('guest.show', compact('project'));

    }
}
