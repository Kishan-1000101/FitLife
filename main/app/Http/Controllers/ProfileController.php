<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->update($request->only(['age', 'weight', 'height', 'fitness_goal']));
        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }
}

