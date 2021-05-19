<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('file');

        $path = Storage::disk('public')->put('/randoms', $file);

        return Storage::disk('public')->url($path);
    }
}
