<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Videogame;

class SubController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function getGames(){
        $games = Videogame::all();

        return json_encode($games);
    }
}
