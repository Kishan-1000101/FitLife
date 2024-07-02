<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $workouts = Workout::where('fitness_goal', $user->fitness_goal)->get();
        return view('workouts.index', compact('workouts'));
    }

    public function create()
    {
        return view('workouts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'fitness_goal' => 'required|string',
        ]);

        Workout::create([
            'name' => $request->name,
            'description' => $request->description,
            'fitness_goal' => $request->fitness_goal,
        ]);

        return redirect()->route('workouts.index')->with('success', 'Workout plan created successfully!');
    }
}


