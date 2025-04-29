<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Resource;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $featuredResources = Resource::with('category')->latest()->take(6)->get();
        $categories = Category::withCount('resources')->get();
        
        return view('home', compact('featuredResources', 'categories'));
    }

    public function help()
    {
        return view('help.index');
    }

    public function faq()
    {
        return view('help.faq');
    }

    public function contact()
    {
        return view('help.contact');
    }

    public function searchHelp()
    {
        return view('help.search');
    }

    public function favoritesHelp()
    {
        return view('help.favorites');
    }

    public function accountHelp()
    {
        return view('help.account');
    }

    public function notificationsHelp()
    {
        return view('help.notifications');
    }

    public function profile()
    {
        $user = Auth::user();
        $favoriteResources = $user->favoriteResources;
        
        return view('profile.index', compact('user', 'favoriteResources'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Ensure $user is an Eloquent model
        if (!($user instanceof \Illuminate\Database\Eloquent\Model)) {
            // Retrieve the user model from the database
            $user = \App\Models\User::find(Auth::id());
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if (!empty($validated['password'])) {
            $user->password = bcrypt($validated['password']);
        }
        
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }

    public function notifications()
    {
        $notifications = Auth::user()->notifications;
        $unreadNotifications = Auth::user()->unreadNotifications;
        
        return view('notifications.index', compact('notifications', 'unreadNotifications'));
    }
}
