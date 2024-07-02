<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DietController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $diets = Diet::where('fitness_goal', $user->fitness_goal)->get();
        return view('diets', compact('diets'));
    }
}


