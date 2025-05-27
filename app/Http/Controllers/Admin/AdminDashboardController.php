<?php

// app/Http/Controllers/Admin/AdminDashboardController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Package;
use App\Models\Test;

class AdminDashboardController extends Controller
{
    public function index()
{
    $userCount = User::count();
    $packageCount = Package::count();
    $testCount = Test::count();

    return view('admin.admin_dash', compact('userCount', 'packageCount', 'testCount'));
}
}