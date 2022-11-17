<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculation extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $firstNumber = $request->input("first__number");
        $secondNumber = $request->input("second__number");
        $operator = $request->input('operator');

        if($operator == '+'){
            $result = $firstNumber + $secondNumber;
        }else if($operator == '-'){
            $result = $firstNumber - $secondNumber;
        }else if($operator == '*'){
            $result = $firstNumber * $secondNumber;
        }else if($operator == '/'){
            $result = $firstNumber / $secondNumber;
        }else if($operator == '%'){
            $result = $firstNumber % $secondNumber;
        }else{
            $result = 0;
        }

        // echo $result;

        return redirect('/')->with('message', $result);
    }
}
