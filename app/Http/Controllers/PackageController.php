<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    private array $iconOptions = [
        'bi bi-heart-pulse'      => 'Heart pulse',
        'bi bi-capsule-pill'     => 'Capsule pill',
        'bi bi-prescription2'    => 'Prescription',
        'bi bi-virus'            => 'Virus',
        'bi bi-lungs'            => 'Lungs',
        'bi bi-clipboard2-pulse' => 'Clipboard pulse',
        'bi bi-file-medical'     => 'Medical file',
    ];

    public function index()
    {
        return view('admin.packages.index', [
            'packages'    => Package::all(),
            'iconOptions' => $this->iconOptions,
        ]);
    }

    public function create()
    {
        return view('admin.packages.create', [
            'iconOptions' => $this->iconOptions,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'details'     => 'nullable|string',
            'icon'        => 'nullable|string|in:' . implode(',', array_keys($this->iconOptions)),
        ]);

        Package::create($data);

        return redirect()->route('packages.index')
                         ->with('success', 'Package created successfully.');
    }

    public function show(Package $package)
    {
        return view('main_components.request-package', compact('package'));
    }

    public function edit(Package $package)
    {
        return view('admin.packages.edit', [
            'package'     => $package,
            'iconOptions' => $this->iconOptions,
        ]);
    }

    public function update(Request $request, Package $package)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'required|numeric',
            'details'     => 'nullable|string',
            'icon'        => 'nullable|string|in:' . implode(',', array_keys($this->iconOptions)),
        ]);

        $package->update($data);

        return redirect()->route('packages.index')
                         ->with('success_edit', 'Package updated successfully.');
    }

    public function destroy(Package $package)
    {
        $package->delete();

        return redirect()->route('packages.index')
                         ->with('success_delete', 'Package deleted successfully.');
    }
}
