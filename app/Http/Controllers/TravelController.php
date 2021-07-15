<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
class TravelController extends Controller
{
    public function index() {
        $Italia = Travel::where('tipo', 'Viaggio in Italia')->get();
        $Spagna = Travel::where('tipo', 'Viaggio in Spagna')->get();
        $Grecia = Travel::where('tipo', 'Viaggio in Grecia')->get();

        return view('home', compact('Italia', 'Spagna', 'Grecia'));
    }
}
