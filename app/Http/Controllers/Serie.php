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
        if ($request->input('actors') == null) {
          $actor = new \App\Actor;
          $actor->name = $request->input('updatename');
          $actor->surname = "";
          $actor->save();
          $serie->actors()->attach($actor);
        } elseif($request->input('actors') !== null) {
            if ($request->input('updatename') !== null) {
              $actor = \App\Actor::find($request->input('actors'));
              $actor->name = $request->input('updatename');
              $actor->surname = "";
              $actor->save();
              $serie->actors()->attach($actor);
            }else {
                $serie->actors()->attach($request->input('actors'));
            }
        }
        if ($request->input('genres') == null) {
          $genre = new \App\Genre;
          $genre->name = $request->input('updategenre');
          $genre->save();
          $serie->genres()->attach($genre);
        } elseif($request->input('genres') !== null) {
            if ($request->input('updategenre') !== null) {
              $genre = \App\Genre::find($request->input('genres'));
              $genre->name = $request->input('updategenre');
              $genre->save();
              $serie->genres()->attach($genre);
            }else {
                $serie->genres()->attach($request->input('genres'));
            }
        }
     return redirect('/listseries');
   }
}
