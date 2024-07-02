<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // Mock data for user statistics
        $userStats = [
            'workouts_completed' => 25,
            'diet_plans_followed' => 18,
            'goals_achieved' => 5,
        ];
        return view('dashboard', compact('user', 'userStats'));
    }
}


