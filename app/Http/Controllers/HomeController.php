<?php

namespace App\Http\Controllers;
use App\Models\journey;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $journeys = journey::all();

        return view("home", compact("journeys"));
    }
}
