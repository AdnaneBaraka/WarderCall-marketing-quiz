<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reponses = Reponse::latest()->paginate(10);
        return view('reponses.index',compact('reponses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reponses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'reponse' => 'required',
            'bonne_reponse' => 'required',
        ]);
        $reponse = Reponse::create($request->all());
        return redirect()->route('reponses.index')->with('success','Reponse ajoute avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reponse $reponse)
    {
        return view('reponses.show',compact('reponse'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reponse $reponse)
    {
        return view('reponse.edit',compact('reponse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reponse $reponse)
    {
        $request->validate([
            'reponse' => 'required',
            'bonne_reponse' => 'required',
        ]);
        $reponse->update($request->all());
        return redirect()->route('reponses.index')->with('success','Reponse modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reponse $reponse)
    {
        $reponse->delete();
        return redirect()->route('reponses.index')->with('success','Reponse supprime avec succes');
    }
}
