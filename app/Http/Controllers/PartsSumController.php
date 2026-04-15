<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartsSumController extends Controller
{
    public function index()
    {
        return view('Machine_Problem1.index');
    }

    public function part_sums(Request $request)
    {
        $number = $request->input('ls');

        if (!is_array($number)) {
            return response()->json([
                'error' => 'Invalid input. Please provide an array.'
            ], 400);
        }

        $total = array_sum($number);
        $result = [$total];

        foreach ($number as $num) {
            $total -= $num;
            $result[] = $total;
        }

        return response()->json([
            'ls' => $number,
            'part_sum' => $result
        ]);
    }
}
