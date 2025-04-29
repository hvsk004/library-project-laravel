<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use App\Models\Category;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');
        $categoryId = $request->input('category');
        
        $resources = Resource::query()
            ->when($query, function ($q) use ($query) {
                return $q->where('title', 'like', "%{$query}%")
                    ->orWhere('description', 'like', "%{$query}%");
            })
            ->when($categoryId, function ($q) use ($categoryId) {
                return $q->where('category_id', $categoryId);
            })
            ->with('category')
            ->paginate(12);
            
        $categories = Category::all();
        
        return view('search.index', compact('resources', 'categories', 'query', 'categoryId'));
    }
}
