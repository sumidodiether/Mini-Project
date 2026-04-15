<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BottleController extends Controller
{
    public function index()
    {
        return view('Machine_Problem2.index');
    }

    public function calculate(Request $request)
    {
        $dailyExpense = $request->dailyExpense;
        $daysInput = explode("\n", trim($request->days));

        $totalEarnings = 0;

        foreach ($daysInput as $day) {
            [$hours, $path, $price] = explode(" ", trim($day));

            $hours = (int)$hours;
            $price = (float)$price;
            $len = strlen($path);

            $bottles = 0;

            for ($i = 0; $i < $hours; $i++) {
                if ($path[$i % $len] === 'B') {
                    $bottles++;
                }
            }

            $totalEarnings += $bottles * $price;
        }

        $daysCount = count($daysInput);
        $average = $totalEarnings / $daysCount;
        $totalExpenses = $dailyExpense * $daysCount;

        if ($average > $dailyExpense) {
            $message = "Good earnings. Extra money per day: " . number_format($average - $dailyExpense, 2);
        } else {
            $message = "Hard times. Money needed: " . number_format($totalExpenses - $totalEarnings, 2);
        }

        return view('Machine_Problem2.index', compact('message'));
    }
}
