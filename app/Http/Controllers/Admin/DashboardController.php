<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use App\Models\User;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $metrics = [
            'total_users' => User::count(),
            'total_resources' => Resource::count(),
            'total_categories' => Category::count(),
            'recent_resources' => Resource::with('category')->latest()->take(5)->get(),
            'recent_users' => User::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('metrics'));
    }
}
