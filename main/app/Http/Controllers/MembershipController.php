<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public function upgrade(Request $request)
    {
        $request->validate([
            'membership' => 'required|string',
        ]);

        $user = Auth::user();
        $user->membership = $request->membership;
        $user->save();

        return redirect()->route('home')->with('status', 'Membership upgraded successfully!');
    }
}
