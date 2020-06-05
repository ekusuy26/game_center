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
    public function blackJack()
    {
        $marks = array('heart','spade','diamond','club');
        $numbers = array('1','2','3','4','5','6','7','8','9','10','11','12','13');
        // 山札を作成
        $deck = array();
        foreach ($marks as $mark){
            foreach ($numbers as $number){
                $card = array($mark, $number);
                array_push($deck,$card);
            }
        }
        $myHand = array();
        for ($count = 0; $count < 2; $count++){
            $hand = array_rand($deck);
            array_push($myHand,$hand);
            array_splice($deck, $hand, 1);
        }
        return view('blackJack', compact('deck', 'myHand'));
    }
}
