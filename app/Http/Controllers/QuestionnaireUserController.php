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
       //

    /**
     * Display the specified resource.
     */
    public function show(QuestionnaireUser $questionnaireUser)
    {
        //
    }

    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionnaireUser $questionnaireUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionnaireUser $questionnaireUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionnaireUser $questionnaireUser)
    {
        //
    }
}
