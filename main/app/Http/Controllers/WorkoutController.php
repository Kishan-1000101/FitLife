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
        return view('workouts', compact('workouts'));
    }
}

