<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function answer(Request $request)
    {
        $request->validate([
            'number' => 'required|min:1|max:12',
        ]);

        if ($request->has('mul')) {
            return view('calculator.answer', [
                'old' => $request->old,
                'number' => $request->number,
                'eq' => '*',
            ]);
        }

        if ($request->has('div')) {
            return view('calculator.answer', [
                'old' => $request->old,
                'number' => $request->number,
                'eq' => '/',
            ]);
        }

        if ($request->has('add')) {
            return view('calculator.answer', [
                'old' => $request->old,
                'number' => $request->number,
                'eq' => '+',
            ]);
        }

        if ($request->has('sub')) {
            return view('calculator.answer', [
                'old' => $request->old,
                'number' => $request->number,
                'eq' => '-',
            ]);
        }
    }
}
