<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::with('category')->paginate(12);
        return view('resources.index', compact('resources'));
    }

    public function show(Resource $resource)
    {
        $related = Resource::where('category_id', $resource->category_id)
            ->where('id', '!=', $resource->id)
            ->take(3)
            ->get();
            
        return view('resources.show', compact('resource', 'related'));
    }

    public function favorites()
    {
        $favorites = auth()->user()->favoriteResources()->paginate(12);
        return view('resources.favorites', compact('favorites'));
    }

    public function toggleFavorite(Resource $resource)
    {
        auth()->user()->favoriteResources()->toggle($resource);
        return back()->with('success', 'Resource favorite status updated');
    }
}
