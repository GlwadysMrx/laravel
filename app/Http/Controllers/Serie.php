<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serie extends Controller
{
   public function insertOne(Request $request)
   {
      $serie = new \App\Serie;
      $serie->title = $request->input('title'); //le titre ma nouvelle série est = à ce que j'ai passé dans mon formulaire
      $serie->publication_year = $request->input('publication_year');
      $serie->save();  // insère la donnée
      //lier un acteur à la série et lié un genre à la série

      if ($request->input('actors') == "") {
        $actor = new \App\Actor;
        $actor->name = $request->input('newname');
        $actor->surname = "";
        $actor->save();

        $serie->actors()->attach($actor);
      }else{
        $serie->actors()->attach($request->input('actors'));
      }


      if ($request->input('genres') == "") {
        $genre = new \App\Genre;
        $genre->name = $request->input('newgenre');
        $genre->save();

        $serie->genres()->attach($genre);
      }else {
        $serie->genres()->attach($request->input('genres'));
      }
      return redirect('/listseries');
   }

   public function deleteOne(Request $request)
   {
     \App\Serie::destroy($request->input('id'));
     return redirect('/listseries');
   }

   public function updateOne(Request $request){
     $serie = \App\Serie::find($request->input('id'));
     $serie->title = $request->input('title');
     $serie->publication_year = $request->input('publication_year');
     $serie->save();
     $serie->actors()->detach();
     $serie->genres()->detach();
        if ($request->input('actors') == "") {
          $actor = \App\Actor::find($request->input('id'));
          $actor->name = $request->input('updatename');
          $actor->surname = "";
          $actor->save();
        }else{
          $serie->actors()->attach($request->input('actors'));
        }


     $serie->genres()->attach($request->input('genres'));
     return redirect('/listseries');
   }
}
