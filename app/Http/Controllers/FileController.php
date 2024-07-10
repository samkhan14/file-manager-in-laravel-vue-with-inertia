<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FileController extends Controller
{
    public function myFiles()
    {
        return Inertia::render("MyFiles");
    }

    public function createFolder(Request $request)
    {
        return Inertia::render("Upload");
    }


}
