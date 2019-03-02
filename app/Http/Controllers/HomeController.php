<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\WeightLog;
use App\WorkOutLog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function logWeight() {
        return view("logs.weight");
    }

    public function logExercise() {
        return view('logs.exercise');
    }

    public function storeWeight(Request $request) {
        $request->validate([
            'weight' => 'integer|required'
        ]);

        $log = new WeightLog([
            'weight' => $request->weight,
        ]);

        Auth::user()->weightLogs()->save($log);

        return redirect('/');
    }

    public function storeExercise(Request $request) {
        $request->validate([
            'type' => 'string|required',
            'length' => 'integer|required'
        ]);

        $log = new WorkOutLog([
            'type' => $request->type,
            'length' => $request->length,
        ]);

        Auth::user()->workOutLogs()->save($log);

        return redirect('/');
    }
}
