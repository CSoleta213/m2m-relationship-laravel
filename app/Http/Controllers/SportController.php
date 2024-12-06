<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;

class SportController extends Controller
{
    public function index() {


        $sports = Sport::with('positions')->get();

        return view('sports', compact('sports'));
    }
}
