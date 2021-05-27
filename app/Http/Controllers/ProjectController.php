<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {

        return view('proyectos.index', [
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show(Project $project)
    {
        return view('proyectos.show', [
            'project' => $project
        ]);
    }

    public function create()
    {
        return view('proyectos.create', [
            'project' => new Project
        ]);
    }

    public function store(SaveProjectRequest $request)
    {

        Project::create($request->validated());

        return redirect()->route('proyectos.index')->with('status', 'El proyecto fue creado con exito.');
    }

    public function edit(Project $project)
    {
        return view('proyectos.edit', [
            'project' => $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('proyectos.show', $project)->with('status', 'El proyecto fue actualizado con exito.');;
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('proyectos.index')->with('status', 'El proyecto fue eliminado con exito.');;
    }
}
