<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Genre extends Controller
{
  public function insertOne(Request $request)
  {
 $genre = new \App\Genre;
 $genre->name = $request->input('newgenre'); //le titre ma nouvelle série est = à ce que j'ai passé dans mon formulaire
 $genre->save();  // insère la donnée
 return redirect('/addseries');
  }
  public function deleteOne(Request $request)
  {
    \App\Genre::destroy($request->input('id'));
    return redirect('/listeseries');
  }
}
