<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamRequest;
use App\Models\Test;
use App\Models\Package;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class ExamRequestController extends Controller
{
    public function create($type, $id)
    {
        if ($type === 'test') {
            $item = Test::findOrFail($id);
        } elseif ($type === 'package') {
            $item = Package::findOrFail($id);
        } else {
            abort(404);
        }

        return view('main_components.exam-request.create', compact('type', 'item'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:test,package',
            'item_id' => 'required|integer',
            'preferred_date' => 'required|date|after_or_equal:today',
            'preferred_time' => 'required',
        ]);

        $examRequest = new ExamRequest();
        $examRequest->user_id = Auth::id();
        $examRequest->type = $request->input('type');

        if ($request->input('type') === 'test') {
            $examRequest->test_id = $request->input('item_id');
            $examRequest->package_id = null;
        } else {
            $examRequest->package_id = $request->input('item_id');
            $examRequest->test_id = null;
        }

        $examRequest->date = $request->input('preferred_date');
        $examRequest->time = $request->input('preferred_time');
        $examRequest->status = 'pending';

        $examRequest->save();

        return redirect()->route('profile')->with('success', 'Exam request submitted.');
    }

    public function index()
    {
        $requests = ExamRequest::with(['user', 'test', 'package'])->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.exam-requests.index', compact('requests'));
    }

    public function approve($id)
    {
        $request = ExamRequest::findOrFail($id);
        $request->status = 'approved';
        $request->save();

        return back()->with('success', 'Request approved.');
    }

    public function reject($id)
    {
        $request = ExamRequest::findOrFail($id);
        $request->status = 'rejected';
        $request->save();

        return back()->with('success', 'Request rejected.');
    }

    public function userRequests()
    {
        $user = Auth::user();

        $appointments = Appointment::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        $requests = ExamRequest::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('main_components.profile.profile', compact('user', 'appointments', 'requests'));
    }
}
