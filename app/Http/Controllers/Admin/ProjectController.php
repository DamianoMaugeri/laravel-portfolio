<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects= Project::all();
        return view("projects.index", compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $data = $request->all();

        $newProject= new Project();

        $newProject->name=$data['name'];
        $newProject->lang=$data['lang'];
        $newProject->description=$data['description'];
        $newProject->team= (bool) $data['team'];

        $newProject->save();


        return  redirect()-> route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {

        //
        return view("projects.show", compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        return view("projects.edit", compact('project'));



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $data= $request->all();

        $project->name = $data["name"];
        $project->lang = $data["lang"];
        $project->description = $data["description"];
        $project->team = (bool) $data["team"];

        $project->update();

        return  redirect()-> route('projects.index');
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return  redirect()-> route('projects.index');


    }
}
