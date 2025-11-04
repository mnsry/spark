<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function answer(Request $request)
    {
        if ($request->has('mul')) {
            return view('calculator.answer', [
                'number' => $request->number,
                'eq' => '*',
            ]);
        }

        if ($request->has('div')) {
            return view('calculator.answer', [
                'number' => $request->number,
                'eq' => '/',
            ]);
        }

        if ($request->has('add')) {
            return view('calculator.answer', [
                'number' => $request->number,
                'eq' => '+',
            ]);
        }

        if ($request->has('sub')) {
            return view('calculator.answer', [
                'number' => $request->number,
                'eq' => '-',
            ]);
        }
    }
}
