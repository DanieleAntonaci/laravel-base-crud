<?php

namespace App\Http\Controllers;

use App\Models\Santo;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        $santos = Santo::all();
        $data = [
            'santos' => $santos,
        ];
        return view('pages.app', $data);
    }

    public function show($id) {

        $santo = Santo::find($id);

        $data = [
            'santo' => $santo
        ];

        return view('pages.santo', $data);
    }
}
