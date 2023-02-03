<?php

namespace App\Http\Controllers;

use App\Models\Santo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        $santos = Santo::orderBy('id', 'DESC') -> get();
        
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

    public function santoCreate(){
        return view('pages.santoCreate');
    }

    public function santoAdd(Request $request){
        $data = $request->all();

        $newSanto = new Santo();
        $newSanto -> name = $data['name'];
        $newSanto -> last_name = $data['last_name'];
        $newSanto -> place_of_birth = $data['place_of_birth'];
        $newSanto -> date_of_blessing = $data['date_of_blessing'];
        $newSanto -> num_miracle = $data['num_miracle'];

        $newSanto -> save();
        
        return redirect() -> route('index');
    }
}
