<?php

namespace App\Http\Controllers;

use App\Models\Santo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        $santos = Santo::all();
        
        return view('pages.app', compact('santos'));
    }

    // funzione di ricerca
    public function santoShow($id) {

        $santo = Santo::find($id);

        $data = [
            'santo' => $santo
        ];

        return view('pages.santo', $data);
    }

    // funzione di cancellazione
    public function santoDelete($id){
        $santo = Santo::find($id);
        $santo -> delete();

        return redirect()-> route('index');

    }
}
