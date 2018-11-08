<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie as Serie;
use App\Actor as Actor;
use App\Genre as Genre;

 class View extends Controller
 {
//     public function contact($name)
//     {
//       return view('contact',[
//         "name"=>$name,
//         "data"=>[
//           "chocolat",
//           "fromage",
//           "saucisson",
//           "vin",
//         ],
//         'showSidebar' => true,
//       ]);
//     }

    public function home()  //renvoie la vu welcome
    {
      return view('welcome');
    }

    public function listSeries()          //renvoie la vu listSeries
    {
      $series =Serie::all();
      //afficher l'acteur et le genre de la série
      return view('listSeries', ['series' => $series ]);
    }

    public function addSeries()
    {
      $actors =Actor::all();
      $genres =Genre::all();
      return view('addseries',[
        "actors" => $actors,
        "genres" => $genres,
      ]);
    }
    public function addActors()
    {
      $actors =Actor::all();
      return view('addactors');
    }
    public function addGenres()
    {
      $actors =Genre::all();
      return view('addgenres');
    }

    public function updateForm(Request $request)
    {
      $serie = \App\Serie::find($request->input('id'));
      $actors =Actor::all();
      $genres =Genre::all();
      return view('update',[
        'serie'=>$serie,
        "actors" => $actors,
        "genres" => $genres,
      ]);
    }
}
