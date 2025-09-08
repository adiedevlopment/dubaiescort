<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Escort\EscortController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\BeachController;
use Illuminate\Support\Facades\Route;
use App\Models\Page;

Route::get('/check-login', function () {
    return 'Login route is working';
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [FrontendController::class, 'welcome']);



Route::get('/privacy-policy', function(){
    return view('pages.policy.privacy-policy');
});



Route::get('/terms-and-condition', function(){
    return view('pages.policy.term-condition');
});



Route::get('/about', function(){
    return view('pages.about');
});


Route::get('/contact', function(){
    return view('pages.contact');
});






// Route::get('/escorts', [EscortController::class, 'index'])->name('escorts.index');

Route::get('/escort/{id}-{slug?}', [EscortController::class, 'show'])->name('escort.show');


// Route::get('/delhi/{beach}', [EscortController::class, 'beach']);

Route::get('/dubai/{beach}', [EscortController::class, 'beach'])
    ->name('escort.beach');

// Single escort detail page
Route::get('/dubai/{beach}/{slug}', [EscortController::class, 'escortDetail'])
    ->name('escort.detail');


Route::get('/redirect', function () {
    if (auth()->user()->role === 'admin') {
        return redirect('/admin/dashboard');
    } elseif (auth()->user()->role === 'escort') {
        return redirect('/escorts/dashboard');
    } else {
        return redirect('/client/dashboard');
    }
});


Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
        Route::get('post/creates', [EscortController::class, 'create'])->name('escorts.create');
        Route::post('/escorts/store', [EscortController::class, 'store'])->name('escorts.store');





        Route::put('/escorts/{id}/status', [EscortController::class, 'updateStatus'])->name('admin.escorts.status.update');

        Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('escorts', EscortController::class);
});

        Route::resource('beaches', BeachController::class);








    // Show all pages
    Route::get('/pages', [PageController::class, 'index'])->name('pages.index');

    // Show create form
    Route::get('/pages/create', [PageController::class, 'create'])->name('pages.create');

    // Store new page
    Route::post('/pages', [PageController::class, 'store'])->name('pages.store');

    // Show single page (optional in admin)
    Route::get('/pages/{page}', [PageController::class, 'show'])->name('pages.show');

    // Show edit form
    Route::get('/pages/{page}/edit', [PageController::class, 'edit'])->name('pages.edit');

    // Update page
    Route::put('/pages/{page}', [PageController::class, 'update'])->name('pages.update');

    // Delete page
    Route::delete('/pages/{page}', [PageController::class, 'destroy'])->name('pages.destroy');



    Route::post('/ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');

   Route::post('/upload-image', [CKEditorController::class, 'upload'])->name('upload.image');

});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
















Route::get('/redirect', function () {
    if (auth()->user()->role === 'admin') {
        return redirect('/admin/dashboard');
    } elseif (auth()->user()->role === 'escort') {
        return redirect('/escorts/dashboard');
    } else {
        return redirect('/client/dashboard');
    }
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/{slug}', function ($slug) {
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('pages.dynamic', compact('page'));
})->where('slug', '.*'); // .* ka matlab unlimited depth capture karega
