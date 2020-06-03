<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function rockPaperScissors()
    {
        return view('rockPaperScissors');
    }
    public function resultRockPaperScissors(Request $request)
    {
        dd($request);
        return view('rockPaperScissors');
    }
}
