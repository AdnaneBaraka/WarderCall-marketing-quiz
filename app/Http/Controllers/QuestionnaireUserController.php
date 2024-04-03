<?php

namespace App\Http\Controllers;

use App\Models\QuestionnaireUser;
use Illuminate\Http\Request;

class QuestionnaireUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questionnaireUsers = QuestionnaireUser::latest()->paginate(10);
        return view('questionnaireUser.index',compact('questionnaireUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('questionnaireUser.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'questionnaire_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'Admis' => 'required',
        ]);
        $questionnaireUser = QuestionnaireUser::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionnaireUser $questionnaireUser)
    {
        return view('questionnaireUser.show',compact('questionnaireUser'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionnaireUser $questionnaireUser)
    {
        return view('questionnaireUser.edit',compact('questionnaireUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionnaireUser $questionnaireUser)
    {
        $request->validate([
            'questionnaire_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'Admis' => 'required',
        ]);
        $questionnaireUser->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionnaireUser $questionnaireUser)
    {
        $questionnaireUser->delete();
        return redirect()->route('questionnaireUsers.index')->with('success','QuestionnaireUser supprime avec succes');
    }
}
