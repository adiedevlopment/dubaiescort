<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKEditorController extends Controller
{ 


    // UploadController.php
public function upload(Request $request)
{
    if($request->hasFile('file')) {
        $file = $request->file('file');
        $filename = time().'_'.$file->getClientOriginalName();
        $path = $file->storeAs('public/uploads', $filename); // storage/app/public/uploads
        return response()->json(asset('storage/uploads/'.$filename));
    }
    return response()->json(['error' => 'No file uploaded'], 400);
}
}
