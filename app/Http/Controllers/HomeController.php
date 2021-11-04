<?php

namespace App\Http\Controllers;
use App\Models\journey;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $journeys = journey::all();

        
        $data = [
            "journeys" => $journeys
        ];

        return view("home", $data);
    }
}
