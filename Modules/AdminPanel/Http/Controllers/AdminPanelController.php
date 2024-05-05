<?php

namespace Modules\AdminPanel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('adminpanel::index');
    }


    public function create()
    {
        return view('adminpanel::create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('adminpanel::show');
    }


    public function edit($id)
    {
        return view('adminpanel::edit');
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
