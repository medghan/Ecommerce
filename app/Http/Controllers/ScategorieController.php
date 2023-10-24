<?php

namespace App\Http\Controllers;

use App\Models\Scategorie;
use Illuminate\Http\Request;

class ScategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scategories = Scategorie::with('categories')->get(); 
        return $scategories;   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scategorie = new Scategorie([ 
            'nomscategorie' => $request->input('nomscategorie'), 
            'imagescategorie' => $request->input('imagescategorie'), 
            'categorieID' => $request->input('categorieID'), 
        ]); 
        $scategorie->save(); 
 
        return response()->json('S/Categorie créée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scategorie  $scategorie
     * @return \Illuminate\Http\Response
     */
    public function show(Scategorie $scategorie)
    {
        $scategorie = Scategorie::find($id); 
        return response()->json($scategorie); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scategorie  $scategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scategorie $scategorie)
    {
        
        $scategorie = Scategorie::find($id); 
        $scategorie->update($request->all()); 
 
        return response()->json('S/Catégorie MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scategorie  $scategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scategorie $scategorie)
    {
        
        $scategorie = Scategorie::find($id); 
        $scategorie->delete(); 
 
        return response()->json('Scategorie supprimée !');
    }
    public function showSCategorieByCAT($idcat) 
    { 
     $Scategorie= Scategorie::where('categorieID', $idcat)>with('categories')->get()->toArray(); 
        return response()->json($Scategorie); 
    }
}
