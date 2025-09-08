<?php

namespace App\Http\Controllers;

use App\Models\Beach;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeachController extends Controller
{
    public function index()
    {
        $beaches = Beach::orderBy('name')->paginate(10);
        return view('admin.beaches.index', compact('beaches'));
    }

    public function create()
    {
         $beaches = Beach::paginate(10); // 10 items per page
        return view('admin.beaches.create', compact('beaches'));
    }

  public function store(Request $request)
{
    $request->validate([
        'name' => 'required|unique:beaches,name',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
        'meta_tag' => 'nullable|string|max:255',
        'meta_title' => 'nullable|string|max:255',
        'meta_keywords' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:500',
    ]);

    $data = $request->only('name', 'description', 'meta_tag', 'meta_title', 'meta_keywords', 'meta_description');

    // Auto generate slug from name
    $data['slug'] = Str::slug($data['name']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('beaches', 'public');
    }

    Beach::create($data);

    return redirect()->route('beaches.index')->with('success', 'Beach added successfully.');
}

    public function edit(Beach $beach)
    {
        return view('admin.beaches.edit', compact('beach'));
    }

    public function update(Request $request, Beach $beach)
{
    $request->validate([
        'name' => 'required|unique:beaches,name,' . $beach->id,
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
        'meta_tag' => 'nullable|string|max:255',
        'meta_title' => 'nullable|string|max:255',
        'meta_keywords' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:500',
    ]);

    $data = $request->only(
        'name',
        'description',
        'meta_tag',
        'meta_title',
        'meta_keywords',
        'meta_description'
    );

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('beaches', 'public');
    }

    // Slug ko name ke basis par auto update karna ho to ye line rakho
    $data['slug'] = Str::slug($data['name']);

    $beach->update($data);

    return redirect()->route('beaches.index')->with('success', 'Beach updated successfully.');
}

    public function destroy(Beach $beach)
    {
        $beach->delete();
        return redirect()->route('beaches.index')->with('success', 'Beach deleted.');
    }
}
