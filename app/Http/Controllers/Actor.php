<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Actor extends Controller
{
    public function insertOne(Request $request)
    {
   $actor = new \App\Actor;
   $actor->name = $request->input('newname'); //le titre ma nouvelle série est = à ce que j'ai passé dans mon formulaire
   $actor->surname = $request->input('newsurname');
   $actor->save();  // insère la donnée
   return redirect('/addseries');
    }
    public function deleteOne(Request $request)
    {
      \App\Actor::destroy($request->input('id'));
      return redirect('/listseries');
    }

}
