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
}
