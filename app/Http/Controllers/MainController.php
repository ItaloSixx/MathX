<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function gereneteExercises(Request $request)
    {
        //form validation
        $request->validate([
            'check_sum' => 'required_without_all:check_subtraction,check_multiplication,check_division',
            'check_subtraction' => 'required_without_all:check_sum,check_multiplication,check_division',
            'check_multiplication' => 'required_without_all:check_sum,check_subtraction,check_division',
            'check_division' => 'required_without_all:check_sum,check_subtraction,check_multiplication',
            'number_one' => 'required|integer|min:0|max:999|lt:number_two',
            'number_two' => 'required|integer|min:0|max:999',
            'number_exercises' => 'required|integer|min:0|max:999'
        ]);

        $operations = [];
        $operations[] = $request->check_suim ? 'sum' : '';
        $operations[] = $request->check_subtraction ? 'subtraction' : '';
        $operations[] = $request->check_multiplication ? 'miltiplication' : '';
        $operations[] = $request->check_division ? 'division' : '';

        $min = $request->number_one;
        $max = $request->number_two;

        $numberExercises = $request->number_exercises;

        $exercices = [];
        for ($i = 1; $i <= $numberExercises; $i++) {
            $operation = $operations[array_rand($operations)];
            $number1 = rand($min, $max);
            $number2 = rand($min, $max);

            $exercise = '';
            $resolution = '';

            switch ($operation) {
                case 'sum':
                    $exercise = "$number1 + $number2 = "; //representação visual
                    $resolution = $number1 + $number2;
                    break;
                case 'subtraction':
                    $exercise = "$number1 - $number2 = ";
                    $resolution = $number1 - $number2;
                    break;
                case 'multiplication':
                    $exercise = "$number1 * $number2 =";
                    $resolution = $number1 * $number2;
                    break;
                case 'division':
                    $exercise = "$number1 / $number2 =";
                    $resolution = $number1 / $number2;
                    break;
            }

            $exercices[] = [
                'exercice_number' => $i,
                'exercise' => $exercise,
                'sollution' => "$exercise, $resolution"
            ];
        }
        dd($exercices);
    }

    public function printExercises() {}

    public function exportExercises() {}
}
