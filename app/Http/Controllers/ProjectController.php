<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Skill;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill = Skill::all();
        $basic = Skill::where('category', 'basic')->get();
        $framework = Skill::where('category', 'framework')->get();
        $projects = Project::all();
        $potraits = Gallery::where('type', 'potrait')->inRandomOrder()->take(1)->get();
        $potraitImages = Gallery::where('type', 'potrait')->inRandomOrder()->take(1)->get();
        $landscapes = Gallery::where('type', 'landscape')->inRandomOrder()->take(4)->get();
        $galleries = Gallery::where('type', 'landscape')->inRandomOrder()->take(4)->get();
        $nomor = 1;
        // dump($basic);
        return view('layouts.main')->with([
            'skill' => $skill,
            'basic' => $basic,
            'framework' => $framework,
            'projects' => $projects,
            'potraits' => $potraits,
            'landscapes' => $landscapes,
            'galleries' => $galleries,
            'potraitImages' => $potraitImages,
            $nomor,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        return view('app.project', [
            'projects' => $projects,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $field = $request->all();
        // dd($field);
        Project::create($field);
        return redirect('/admin-projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    public function admin()
    {
        return view('app.home');
    }

    public function skill() 
    {
        $basic = Skill::where('category', 'basic')->get();
        $framework = Skill::where('category', 'framework')->get();
        $count = $basic->count();
        // dump($count);
        return view('app.skill', [
            'basic' => $basic,
            'framework' => $framework,
        ])->with(['count'=>$count]);
    }

    public function add_skill(Request $request)
    {
        $skill = $request->all();
        $since = Carbon::parse($skill['since'])->format('Y');
        $skill['since'] = $since;
        Skill::create($skill);
        // dd($skill);
        return redirect('/admin-skill');
    }

    public function gallery()
    {
        $projects = Project::all();
        $galleries = Gallery::all();
        return view('app.gallery', [
            'projects' => $projects,
            'galleries' => $galleries
        ]);
    }

    public function add_gallery(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,jpg,png,svg|max:2048',
            'project_id' => 'required',
            'type' => 'required',
        ]);
        $field = $request->all();
        $logo = $request['project_id'];
        // $file = Carbon::now()->timestamp . '.' . $request['image']->extension();
        $file = request()->file('image') ? request()->file('image')->store('gallery') : $logo;
        $field['image'] = $file;
        // dd($file);
        Gallery::create($field);
        return redirect('/admin-gallery');
    }

    public function message(Request $request)
    {
        $field = $request->all();
        Contact::create($field);
        return redirect('/');
    }
}
