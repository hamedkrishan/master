<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ExamRequest;

class UserController extends Controller
{
    // Show user profile and appointments
    // public function profile()
    // {
    //     $user = Auth::user();
    //     $appointments = $user->appointments()->latest()->get();

    //     // Fetch user's exam requests
    //     $requests = ExamRequest::where('user_id', $user->id)
    //                 ->latest()
    //                 ->get();

    //     return redirect()->route('profile')->with('success', 'Exam request submitted.');


    // }
    public function profile()
    {
        $user = Auth::user();
        $appointments = $user->appointments()->latest()->get();
    
        $requests = ExamRequest::where('user_id', $user->id)
                    ->latest()
                    ->get();
    
        return view('main_components.proffile.profile', compact('user', 'appointments', 'requests'));
    }
    


    // Update user name and email
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
