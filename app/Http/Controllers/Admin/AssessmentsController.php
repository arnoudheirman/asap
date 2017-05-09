<?php

namespace App\Http\Controllers\Admin;
use App\Competence;
use App\Connotation;
use App\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Assessment;

class AssessmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $connotations = Connotation::all();
        $levels = Level::where('competence_id', '1')->get();
        $competences = Competence::all();
        return view('admin.create', compact('connotations', 'levels', 'competences'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
        $assessment = new Assessment;
        $assessment->name = request("name");
        $assessment->description = request("description");
        $assessment->competence_id = request("competence");
        $assessment->connotation_id = request("connotation");;
        $assessment->level_id = request("level");;
        
        $assessment->save();
        
   
        
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
