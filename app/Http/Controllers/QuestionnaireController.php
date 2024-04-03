<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questionnaires = Questionnaire::latest()->paginate(10);
        return view('questionnaire.index',compact('questionnaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('questionnaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'question_id' => 'required',
        ]);
        $questionnaire = Questionnaire::create($request->all());
        return redirect()->route('questionnaires.index')->with('success','Questionnaire ajoute avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Questionnaire $questionnaire)
    {
        return view('questionnaire.show',compact('questionnaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Questionnaire $questionnaire)
    {
        return view('questionnaire.edit',compact('questionnaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Questionnaire $questionnaire)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'question_id' => 'required',
        ]);
        $questionnaire->update($request->all());
        return redirect()->route('questionnaires.index')->with('success','Questionnaire modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Questionnaire $questionnaire)
    {
        $questionnaire->delete();
        return redirect()->route('questionnaires.index')->with('success','Questionnaire supprime avec succes');
    }
}
