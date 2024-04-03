<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::latest()->paginate(10);
        return view('note.index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'note' => 'required',
            'question_id' => 'required',
            'user_id' => 'required',
            'questionnaire_id' => 'required',
            'reponse_id' => 'required',
        ]);
        $note = Note::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('note.show',compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('note.edit',compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'note' => 'required',
            'question_id' => 'required',
            'user_id' => 'required',
            'questionnaire_id' => 'required',
            'reponse_id' => 'required',
        ]);
        $note->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('success','Note supprime avec succes');
    }
}
