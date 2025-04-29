<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use App\Models\Category;
use App\Http\Requests\ResourceRequest;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::with('category')->latest()->paginate(10);
        return view('admin.resources.index', compact('resources'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.resources.create', compact('categories'));
    }

    public function store(ResourceRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request->file('cover_image')->store('covers', 'public');
        }

        Resource::create($validated);

        return redirect()->route('admin.resources.index')
            ->with('success', 'Resource created successfully.');
    }

    public function edit(Resource $resource)
    {
        $categories = Category::all();
        return view('admin.resources.edit', compact('resource', 'categories'));
    }

    public function update(ResourceRequest $request, Resource $resource)
    {
        $validated = $request->validated();

        if ($request->hasFile('cover_image')) {
            if ($resource->cover_image) {
                Storage::disk('public')->delete($resource->cover_image);
            }
            $validated['cover_image'] = $request->file('cover_image')->store('covers', 'public');
        }

        $resource->update($validated);

        return redirect()->route('admin.resources.index')
            ->with('success', 'Resource updated successfully.');
    }

    public function destroy(Resource $resource)
    {
        if ($resource->cover_image) {
            Storage::disk('public')->delete($resource->cover_image);
        }

        $resource->delete();

        return redirect()->route('admin.resources.index')
            ->with('success', 'Resource deleted successfully.');
    }
}
