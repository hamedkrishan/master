<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ExamRequest;
use Illuminate\Http\Request;

class ExamRequestAdminController extends Controller
{
    public function index()
    {
        $requests = ExamRequest::with('user')->latest()->get();
        return view('admin.exam-requests.index', compact('requests'));
    }

    public function approve($id)
    {
        $request = ExamRequest::findOrFail($id);
        $request->status = 'approved';
        $request->save();

        return redirect()->route('admin.exam-requests.index')->with('success', 'Request approved.');
    }

    public function reject($id)
    {
        $request = ExamRequest::findOrFail($id);
        $request->status = 'rejected';
        $request->save();

        return redirect()->route('admin.exam-requests.index')->with('success', 'Request rejected.');
    }
}

