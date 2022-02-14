<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Videogame;
use App\Mail\DeleteGames;

class SubController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function getGames(){
        $games = Videogame::all();

        return json_encode($games);
    }

    public function deleteGames($id){

        $game = Videogame::findOrFail($id);

        $game -> delete();

        $this->sendMail($game);

        return json_encode($game);
    }

    private function sendMail($game){
        Mail::to(Auth::user() -> email)->send(new DeleteGames($game));
        Mail::to('admin@ADMIN.com')->send(new DeleteGames($game));
    }
}
