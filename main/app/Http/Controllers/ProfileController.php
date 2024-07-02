<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $data = $request->only(['age', 'weight', 'height', 'fitness_goal']);

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('profile_pictures', $filename, 'public');
            $data['profile_picture'] = $path;
        }

        $user->update($data);
        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }
}
