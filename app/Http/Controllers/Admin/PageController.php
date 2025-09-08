<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * List all pages
     */
    public function index()
    {
        $pages = Page::latest()->get();
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show create page form
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store new page
     */
    public function store(Request $request)
{
    $request->validate([
        'title'   => 'required|string|max:255',
        'slug'    => 'nullable|string|max:255|unique:pages,slug',
        'content' => 'required|string',
    ]);

    $slug = $request->filled('slug')
        ? trim(Str::slug($request->slug), '/')
        : Str::slug($request->title);

   Page::create([
    'title'            => $request->title,
    'slug'             => $slug,
    'content'          => $request->content,
    'meta_title'       => $request->meta_title ?? $request->title,
    'meta_description' => $request->meta_description ?? Str::limit(strip_tags($request->content), 160),
    'canonical_url'    => $request->canonical_url ?? url('/page/' . $slug),
]);

    return redirect()->route('pages.index')->with('success', 'Page created successfully.');
}
    /**
     * Show edit page form
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update page
     */
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'slug'    => 'nullable|string|max:255|unique:pages,slug,' . $page->id,
            'content' => 'required|string',
        ]);

        $slug = $request->filled('slug')
            ? trim(Str::slug($request->slug), '/')
            : Str::slug($request->title);

        $page->update([
            'title'   => $request->title,
            'slug'    => $slug,
            'content' => $request->content,
        ]);

        return redirect()->route('pages.index')->with('success', 'Page updated successfully.');
    }

    /**
     * Delete page
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }
}




