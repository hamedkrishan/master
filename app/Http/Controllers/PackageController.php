<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    // عرض جميع الباكجات
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    // عرض نموذج إنشاء باكج جديد
    public function create()
    {
        return view('admin.packages.create');
    }

    // تخزين باكج جديد
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'icon' => 'nullable|string',
            'details' => 'nullable|string',
        ]);

        Package::create($validated);

        return redirect()->route('packages.index');
    }

    // عرض تفاصيل باكج واحد
    public function show($id)
    {
 $package = Package::findOrFail($id);
    return view('main_components.request-package', compact('package'));
    }

    // عرض نموذج تعديل باكج
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.packages.edit', compact('package'));
    }

    // تحديث باكج
    public function update(Request $request, $id)
    {
        $package = Package::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'icon' => 'nullable|string',
            'details' => 'nullable|string',
        ]);

        $package->update($validated);

        return redirect()->route('packages.index');
    }

    // حذف باكج
    public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->route('packages.index');
    }
}
