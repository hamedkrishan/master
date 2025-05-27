<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Store a new appointment request (public site).
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'mobile'  => 'required|string|max:30',
            'service' => 'required|string|in:home sample collection,Appointment in Our lab',
            'date'    => 'required|date|after_or_equal:today',   // NEW
            'time'    => 'required',                             // NEW
            'message' => 'nullable|string',
        ]);

        $data['user_id'] = Auth::id();          // attach user if logged-in

        Appointment::create($data);

        return back()->with('success', 'Your appointment request has been submitted. We’ll contact you soon!');
    }

    /**
     * Admin dashboard list.
     */
    public function index()
    {
        $appointments = Appointment::with('user')->latest()->paginate(15);
        return view('admin.appointment-request.index', compact('appointments'));
    }

    /**
     * Approve or decline.
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate(['status' => 'required|in:approved,declined']);

        $appointment = Appointment::findOrFail($id);
        $appointment->status = $request->status;
        $appointment->save();

        return back()->with('success', 'Appointment status updated.');
    }
}
