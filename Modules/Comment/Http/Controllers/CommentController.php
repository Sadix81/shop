<?php

namespace Modules\Comment\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CommentController extends Controller
{

    public function index()
    {
        return view('comment::index');
    }


    public function create()
    {
        return view('comment::create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('comment::show');
    }


    public function edit($id)
    {
        return view('comment::edit');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
