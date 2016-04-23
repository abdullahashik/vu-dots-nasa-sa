<?php

namespace App\Http\Controllers;

use App\Bio;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PlanetController extends Controller
{
    public function earth()
    {
        return view('mod3D.planets.earth');
    }

    public function venus()
    {
        return view('mod3D.planets.venus');
    }

    public function sun()
    {
        return view('mod3D.planets.sun');
    }

    public function merury()
    {
        return view('mod3D.planets.mercury');
    }

    public function mars()
    {
        return view('mod3D.planets.mars');
    }

    public function jupiter()
    {
        return view('mod3D.planets.jupiter');
    }

    public function travel()
    {
        return view('travel.spacetravel');
    }

    public function history()
    {

        $history = new \App\HistoryEvents();
        $history = $history->paginate(4);

        return view('mod3D.history')->with('history', $history);
    }
    public function bio(){
        $bio = new Bio();
        $bio = $bio->paginate(4);
        return view('mod3D.bio')->with('bio', $bio);
    }
}
