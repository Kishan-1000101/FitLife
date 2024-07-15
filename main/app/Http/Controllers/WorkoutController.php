<?php

namespace App\Http\Controllers;

use App\Models\WorkoutPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $workouts = WorkoutPlan::where('fitness_goal', $user->fitness_goal)->with('exercises')->get();
        return view('workouts.index', compact('workouts'));
    }

}
