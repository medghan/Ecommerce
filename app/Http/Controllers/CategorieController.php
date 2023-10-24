<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all()->toArray();
        return array_reverse($categories); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie = new Categorie([ 
            'nomcategorie' => $request->input('nomcategorie'), 
            'imagecategorie' => $request->input('imagecategorie') 
        ]); 
        $categorie->save(); 
        return response()->json('Catégorie créée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $scategorie = categorie::find($id); 
        $scategorie->update($request->all()); 
 
        return response()->json('Catégorie MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scategorie = categorie::find($id); 
        $scategorie->delete(); 
 
        return response()->json('categorie supprimée !');
    }
}
