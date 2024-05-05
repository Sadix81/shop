<?php

namespace Modules\Filemanager\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FilemanagerController extends Controller
{
    public function index()
    {
        return view('galleryfilemanager');
    }
}
