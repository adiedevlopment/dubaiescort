<?php

namespace App\Http\Controllers\Escort;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Escort;
use App\Models\Beach;
use Illuminate\Support\Str;
use App\Imports\EscortsImport;
use Maatwebsite\Excel\Facades\Excel;



class EscortController extends Controller
{
    public function dashboard()
    {
         $escort = Escort::first(); // ya find(1), ya koi bhi specific escort
          $escorts = Escort::with('thumbnails')->get();
          $gender = 'Female'; // Ya dynamic value
              $location = 'Delhi'; // ya dynamic dat
 $escorts = Escort::where('status', 'active')
                    ->where('category', 'female-escorts') // ya 'female' if that's your DB value
                    ->get();
        return view('escort.dashboard',compact('escorts' , 'gender' , 'location' , 'escort'));
    }


   public function create()
{
    $beaches = Beach::orderBy('name')->get(); // DB se sari beaches laa lo
    return view('admin.profile.create', compact('beaches'));
}







public function import(Request $request)
{
    // Validate file (CSV bhi allow)
    $request->validate([
        'import_file' => 'required|file|mimes:csv,xlsx,xls',
    ]);

    // Perform import
    Excel::import(new EscortsImport, $request->file('import_file'));

    // Redirect with success message
    return back()->with('success', 'Escort profiles imported successfully!');
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'custom_title' => 'nullable|string|max:255',
        'gender' => 'required|in:male,female,trans',
        'category' => 'required|in:female-escorts,male-escorts,trans-escorts',
        'age' => 'required|integer|min:18|max:100',
        'location' => 'required|string|max:255',
        'phone' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',
        'rate_per_hour' => 'nullable|numeric|min:0',
        'currency' => 'nullable|string|max:5',
        'bio' => 'nullable|string',
        'about' => 'nullable|string',
        'slug' => 'nullable|string|max:255',
        'services' => 'required|array|min:1',
        'services.*' => 'string',
        'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg|max:9048',
        'thumb1' => 'nullable|image|mimes:jpeg,png,jpg|max:9048',
        'thumb2' => 'nullable|image|mimes:jpeg,png,jpg|max:9048',
        'thumb3' => 'nullable|image|mimes:jpeg,png,jpg|max:9048',
        'experience' => 'nullable|integer|min:0|max:80',
        'languages_spoken' => 'nullable|string|max:500',
        'incall_enabled' => 'nullable|in:on',
        'outcall_enabled' => 'nullable|in:on',

        // New fields validation
        'marital_status' => 'nullable|in:married,unmarried',
        'vip' => 'nullable|boolean',
        'smokes' => 'nullable|boolean',
        'outcall_rate' => 'nullable|numeric|min:0',
        'height' => 'nullable|string|max:100',
        'bust' => 'nullable|string|max:100',
        'nationality' => 'nullable|string|max:255',
        'orientation' => 'nullable|string|max:255',
        'ethnicity' => 'nullable|string|max:255',
        'shaved' => 'nullable|string|max:100',
        'hair_color' => 'nullable|string|max:100',
        'currency_incall' => 'nullable|string|max:5',
        'currency_outcall' => 'nullable|string|max:5',

        // ðŸ”¹ SEO fields
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:500',
        'meta_keywords' => 'nullable|string|max:500',
    ]);


      // Slug automatically generate (hyphen + lowercase)
    $data['slug'] = $request->slug ? Str::slug($request->slug) : Str::slug($request->name);

    if ($request->hasFile('profile_photo')) {
        $data['profile_photo'] = $request->file('profile_photo')->store('profiles', 'public');
    }

      // Thumbnails Upload
    if ($request->hasFile('thumb1')) {
        $data['thumb1'] = $request->file('thumb1')->store('profiles', 'public');
    }
    if ($request->hasFile('thumb2')) {
        $data['thumb2'] = $request->file('thumb2')->store('profiles', 'public');
    }
    if ($request->hasFile('thumb3')) {
        $data['thumb3'] = $request->file('thumb3')->store('profiles', 'public');
    }

    // Convert services array to comma-separated string for DB
    $data['services'] = implode(',', $request->input('services'));

    // Checkbox handling
    $data['incall_enabled'] = $request->has('incall_enabled') ? true : false;
    $data['outcall_enabled'] = $request->has('outcall_enabled') ? true : false;

    // Boolean castable fields
    $data['vip'] = isset($data['vip']) ? (bool) $data['vip'] : false;
    $data['smokes'] = isset($data['smokes']) ? (bool) $data['smokes'] : false;

    // Default values
    $data['user_id'] = auth()->id();
    $data['verified'] = false;
    $data['status'] = 'active';
    $data['rating'] = 4.5;

    Escort::create($data);

    return redirect()->back()->with('success', 'Escort profile created successfully!');
}



public function index(Request $request)
{
    $search = $request->input('search');

    $escorts = Escort::query()
        ->when($search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%")
                  ->orWhere('status', 'like', "%{$search}%");
        })
        ->latest()
        ->paginate(20);

    return view('admin.escorts.index', compact('escorts'));
}



public function show($id, $slug = null)
{
    $escort = Escort::findOrFail($id);
    $correctSlug = $escort->slug ?? \Str::slug($escort->name);

    if ($slug !== $correctSlug) {
        return redirect()->route('escort.show', [
            'id' => $escort->id,
            'slug' => $correctSlug
        ], 301);
    }

    $seoTitle = $escort->meta_title ?? "{$escort->name} - {$escort->category} Escort in {$escort->location}";
    $seoDescription = $escort->meta_description ?? "{$escort->name}, a {$escort->age}-year-old {$escort->category} escort based in {$escort->location}. Offering services like {$escort->services}.";
    $seoKeywords = $escort->meta_keywords ?? strtolower("{$escort->name} escort, {$escort->location} escorts, {$escort->category} call girl");

    // Canonical URL
    $canonicalUrl = route('escort.show', ['id' => $escort->id, 'slug' => $correctSlug]);

    return view('filter.show', compact(
        'escort',
        'seoTitle',
        'seoDescription',
        'seoKeywords',
        'canonicalUrl'
    ));
}





public function beach($beachSlug)
{
    $beachDetails = Beach::where('slug', $beachSlug)->firstOrFail();

    // Active Escorts for display
    $escorts = Escort::where('location', $beachSlug)
        ->where('status', 'active')
        ->get();

    // 🔹 Count ALL escorts in this beach (regardless of status)
    $totalCount = Escort::where('location', $beachSlug)->count();

    // 🔹 Verified Count (only active)
    $verifiedCount = $escorts->where('verified', true)->count();

    $minPrice = $escorts->min('rate_per_hour');
    $maxPrice = $escorts->max('rate_per_hour');
    $avgPrice = $escorts->avg('rate_per_hour');

    $topServices = $escorts->pluck('services')
        ->flatMap(fn($item) => array_map('trim', explode(',', $item)))
        ->countBy()
        ->sortDesc()
        ->take(7)
        ->keys()
        ->toArray();

    $nearbyLocations = [
        'Business Bay Dubai', 'Bur Dubai', 'Dubai Greek',
        'Jumeirah Beach', 'Al Barari', 'JVC Dubai', 'Al Barsha'
    ];

    $seoTitle = $beachDetails->meta_title
        ?? "{$beachDetails->name} Vip Escorts in Delhi | VIP Call Girls & Independent Escorts";

    $seoDescription = $beachDetails->meta_description
        ?? (
            $totalCount > 0
                ? "{$beachDetails->name} Escorts has {$totalCount} escorts available in Delhi. Prices from ₹{$minPrice} to ₹{$maxPrice}, average ₹{$avgPrice}. Top services: " . implode(', ', $topServices) . "."
                : "Find independent call girls and escorts at {$beachDetails->name} Escorts in Delhi."
        );

    $seoKeywords = $beachDetails->meta_keywords
        ?? strtolower($beachDetails->name) . " Vip escorts, {$beachDetails->name} call girls, Delhi escorts, vip escorts in {$beachDetails->name}";

    $seoTag = $beachDetails->meta_tag ?? 'Delhi Escorts, Escorts, Call Girls in Delhi';

    $canonical = url('/beach/' . $beachDetails->slug);

    return view('filter.beach', compact(
        'beachDetails',
        'escorts',
        'totalCount',
        'verifiedCount',
        'minPrice',
        'maxPrice',
        'avgPrice',
        'topServices',
        'nearbyLocations',
        'seoTitle',
        'seoDescription',
        'seoKeywords',
        'seoTag',
        'canonical'
    ));
}




public function escortDetail($beachSlug, $slug)
{
    $escort = Escort::where('location', $beachSlug)
        ->where('slug', $slug)
        ->firstOrFail();

         $seoTitle = $escort->meta_title ?? "{$escort->name} - {$escort->category} Escort in {$escort->location}";
    $seoDescription = $escort->meta_description ?? "{$escort->name}, a {$escort->age}-year-old {$escort->category} escort based in {$escort->location}. Offering services like {$escort->services}.";
    $seoKeywords = $escort->meta_keywords ?? strtolower("{$escort->name} escort, {$escort->location} escorts, {$escort->category} call girl");


    return view('filter.escort-detail', compact(
        'escort',
        'seoTitle',
        'seoDescription',
        'seoKeywords',

    ));
}









public function indexx(Request $request)
{
    $search = $request->input('search');

    $escorts = Escort::query()
        ->when($search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%")
                  ->orWhere('status', 'like', "%{$search}%");
        })
        ->latest()
        ->paginate(20);

    return view('admin.escorts.index', compact('escorts'));
}

    // Show edit form
    public function edit(Escort $escort)
    {
        return view('admin.escorts.edit', compact('escort'));
    }


    public function destroy(Escort $escort)
{
    $escort->delete();
    return redirect()->route('admin.escorts.index')->with('success', 'Escort deleted successfully.');
}

    // Update escort
    public function update(Request $request, Escort $escort)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'services' => 'nullable|string',
        'age' => 'required|integer',
        'rate_per_hour' => 'required|numeric',
        'vip' => 'required|boolean',
    ]);

    $escort->update($request->only([
        'name', 'location', 'services', 'age', 'rate_per_hour', 'vip'
    ]));

    return redirect()->route('admin.escorts.index')->with('success', 'Escort updated successfully!');
}



 public function updateStatus(Request $request, $id)
{
    $escort = Escort::findOrFail($id);

    // ✅ Validation
    $data = $request->validate([
        'name'              => 'required|string|max:255',
        'gender'            => 'required|in:male,female,trans',
        'category'          => 'required|in:female-escorts,male-escorts,trans-escorts',
        'local_area'        => 'nullable|string|max:255',
        'age'               => 'required|integer|min:18|max:100',
        'location'          => 'required|string|max:255',
        'phone'             => 'nullable|string|max:20',
        'email'             => 'nullable|email|max:255',
        'rate_per_hour'     => 'nullable|numeric|min:0',
        'bio'               => 'nullable|string',
        'services'          => 'required|string',
        'profile_photo'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:9048',
        'thumb1'            => 'nullable|image|mimes:jpeg,png,jpg,webp|max:9048',
        'thumb2'            => 'nullable|image|mimes:jpeg,png,jpg,webp|max:9048',
        'thumb3'            => 'nullable|image|mimes:jpeg,png,jpg,webp|max:9048',
        'rating'            => 'nullable|numeric|min:0|max:5',
        'verified'          => 'nullable|boolean',
        'status'            => 'nullable|string|max:255',
        'experience'        => 'nullable|integer|min:0|max:80',
        'languages_spoken'  => 'nullable|string|max:500',
        'vip'               => 'nullable|boolean',
        'height'            => 'nullable|string|max:100',
        'bust'              => 'nullable|string|max:100',
        'nationality'       => 'nullable|string|max:255',
        'orientation'       => 'nullable|string|max:255',
        'ethnicity'         => 'nullable|string|max:255',
        'shaved'            => 'nullable|string|max:100',
        'hair_color'        => 'nullable|string|max:100',
        'smokes'            => 'nullable|boolean',
        'outcall_rate'      => 'nullable|numeric|min:0',
        'marital_status'    => 'nullable|in:married,unmarried',
          // 🔹 New SEO & Custom Fields
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:500',
        'meta_keywords' => 'nullable|string|max:500',
        'slug' => 'nullable|string|max:255|unique:escorts,slug,' . $id,
        'custom_title' => 'nullable|string|max:255',
    ]);

    // ✅ Handle Image Uploads (profile_photo, thumb1, thumb2, thumb3)
    foreach (['profile_photo', 'thumb1', 'thumb2', 'thumb3'] as $imageField) {
        if ($request->hasFile($imageField)) {
            // Optional: Delete old file
            if ($escort->$imageField) {
                \Storage::disk('public')->delete($escort->$imageField);
            }

            // Store new image
            $data[$imageField] = $request->file($imageField)->store('profiles', 'public');
        } else {
            // Keep old image if not uploaded
            unset($data[$imageField]);
        }
    }

    // ✅ Update Escort
    $escort->update($data);

    return redirect()->back()->with('success', 'Escort profile updated successfully!');
}




public function search($slug)
{
    // URL slug ko readable format me convert karo
    $query = str_replace('-', ' ', $slug);

    // Simple array search (agar DB nahi use kar rahe)
    $allAreas = [
        'Blow Job',
        'Anal Sex',
        'Blow Job Without Condom',
        'Cum in Mouth',
        'Cum on Body',
        'Deep French Kissing',
        'Doggy Style',
        'Group Sex',
        'Sex in All Positions (With Condom)',
        'Connaught Place',
        'Karol Bagh',
        'Paharganj',
        'Rajouri Garden',
        'Janakpuri',
        'Dwarka',
        'Vasant Kunj',
        'Hauz Khas',
        'Saket',
        'Greater Kailash',
        'College Escorts',
        'High Profile Escorts',
        'Housewife Escort',
        'Party Girl Escorts',
        'Russian Escorts',
        'Young Girl Escorts',
        'Independent Escorts',
        'Massage Escorts',
        'Delhi escorts services',
        'independent escorts Delhi',
        'escort agency Delhi',
        'vip escorts Delhi',
        'escort girls in Delhi',
        'call girls Delhi',
        'luxury escorts Delhi',
    ];

    // Filter results jo slug me match ho
    $results = array_filter($allAreas, function ($area) use ($query) {
        return stripos($area, $query) !== false;
    });

    // Database se data fetch karna
    $escort = Escort::first(); // ya find(1)
    $escorts = Escort::with('thumbnails')->get();
    $gender = 'Female'; // Ya dynamic value
    $location = 'Delhi'; // Ya dynamic data
    $escorts = Escort::where('status', 'active')
                      ->where('category', 'female-escorts')
                      ->get();
    $vipEscorts = Escort::where('vip', 1)->latest()->get();

    // Blade me results send karna
    return view('filter.search', [
        'query' => $query,
        'results' => $results,
        'escort' => $escort,
        'escorts' => $escorts,
        'gender' => $gender,
        'location' => $location,
        'vipEscorts' => $vipEscorts,
    ]);
}


}


