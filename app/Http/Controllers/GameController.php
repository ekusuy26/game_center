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
        $myHand = $request->hand;
        $opponent = array('rock','paper','scissors');
        $opponentHand = array_rand($opponent);
        if ($myHand == 0 && $opponentHand ==0){
            $result = 'あいこ';
        } elseif ($myHand == 0 && $opponentHand ==1){
            $result = 'まけ';
        } elseif ($myHand == 0 && $opponentHand ==2){
            $result = 'かち';
        } elseif ($myHand == 1 && $opponentHand ==0){
            $result = 'かち';
        } elseif ($myHand == 1 && $opponentHand ==1){
            $result = 'あいこ';
        } elseif ($myHand == 1 && $opponentHand ==2){
            $result = 'まけ';
        } elseif ($myHand == 2 && $opponentHand ==0){
            $result = 'まけ';
        } elseif ($myHand == 2 && $opponentHand ==1){
            $result = 'かち';
        } elseif ($myHand == 2 && $opponentHand ==2){
            $result = 'あいこ';
        }else{
            $result = 'エラー';
        }
        return view('result', compact('result', 'myHand', 'opponentHand'));
    }
}
