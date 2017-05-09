<?php

namespace App\Http\Controllers;

use App\Assessment;
use App\Competence;
use App\Connotation;
use App\AssessmentFilters;
use App\Level;
use App\Report;
use Illuminate\Http\Request;
use Symfony\Component\Yaml\Tests\A;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index(Request $request)
    public function index(AssessmentFilters $filters)
    {

        /** @var TYPE_NAME $assessment */
        /*$assessments = (new Assessment)->newQuery();

        if($request->has('connotation')){
           $assessments->where('connotation_id', $request->connotation);
        }
        if($request->has('level')){
            $assessments->where('level_id', $request->level);
        }
        if($request->has('competence')){
            //$assesments = $assesment->where('level_id', $request->level)->get();
            $assessments->join('assessment_competence', 'assessments.id', '=', 'assessment_competence.assessment_id')
            ->where('assessment_competence.competence_id', $request->competence);
        }

        $assessments->get();*/
        
        $assessments = Assessment::filter($filters)->get();
        
        //dd($assessments);

        $connotations = Connotation::all();
        $levels = Level::all();
        $competences = Competence::all();

        return view('reports/index', compact('connotations', 'assessments', 'levels', 'competences'));
    }
    
     public function filteritems(AssessmentFilters $filters)
    {

        /** @var TYPE_NAME $assessment */
        /*$assessments = (new Assessment)->newQuery();

        if($request->has('connotation')){
           $assessments->where('connotation_id', $request->connotation);
        }
        if($request->has('level')){
            $assessments->where('level_id', $request->level);
        }
        if($request->has('competence')){
            //$assesments = $assesment->where('level_id', $request->level)->get();
            $assessments->join('assessment_competence', 'assessments.id', '=', 'assessment_competence.assessment_id')
            ->where('assessment_competence.competence_id', $request->competence);
        }

        $assessments->get();*/
        
        $assessments = Assessment::filter($filters)->get();
        
        //dd($assessments);

        /*$connotations = Connotation::all();
        $levels = Level::all();
        $competences = Competence::all();

        return view('reports/index', compact('connotations', 'assessments', 'levels', 'competences'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }

    public function filter(){

        $con = Request::get('connotations');


    }
}
