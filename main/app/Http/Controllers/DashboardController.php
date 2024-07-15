<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\WorkoutPlan;
use App\Models\Diet;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Fetch the recommended workout and diet for the user
        $workouts = WorkoutPlan::where('fitness_goal', $user->fitness_goal)->get();
        $diets = Diet::where('fitness_goal', $user->fitness_goal)->get();

        // Mock data for user statistics
        $userStats = [
            'workouts_completed' => 25,
            'diet_plans_followed' => 18,
            'goals_achieved' => 5,
        ];

        return view('dashboard', compact('user', 'userStats', 'workouts', 'diets'));
    }
}
