<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    protected function iconOptions(): array
    {
        return [
            'bi bi-heart-pulse'      => 'Heart / Pulse',
            'bi bi-lungs'            => 'Lungs',
            'bi bi-virus'            => 'Virus',
            'bi bi-capsule-pill'     => 'Capsule-Pill',
            'bi bi-capsule'          => 'Capsule',
            'bi bi-prescription2'    => 'Prescription',
            'bi bi-clipboard2-pulse' => 'Clipboard Pulse',
            'bi bi-file-medical'     => 'File Medical',
        ];
    }

    public function index()
    {
        $tests       = Test::latest()->paginate(10);
        $iconOptions = $this->iconOptions();

        return view('admin.Test.index', compact('tests', 'iconOptions'));
    }

    public function create()
    {
        $iconOptions = $this->iconOptions();
        return view('admin.Test.create', compact('iconOptions'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
            'icon_class'  => 'nullable|string|max:100',
        ]);

        Test::create($data);

        return redirect()->route('tests.index')->with('success', 'Test created successfully.');
    }

    public function edit(Test $test)
    {
        $iconOptions = $this->iconOptions();
        return view('admin.Test.edit', compact('test', 'iconOptions'));
    }

    public function update(Request $request, Test $test)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric',
            'description' => 'nullable|string',
            'icon_class'  => 'nullable|string|max:100',
        ]);

        $test->update($data);

        return redirect()->route('tests.index')->with('success_edit', 'Test updated successfully.');
    }

    public function destroy(Test $test)
    {
        $test->delete();
        return back()->with('success', 'Test deleted successfully.');
    }

    public function show(Test $test)
    {
        return view('main_components.tests.single', compact('test'));
    }
}
