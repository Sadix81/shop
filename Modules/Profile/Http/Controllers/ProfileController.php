<?php

namespace Modules\Profile\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Modules\Admin\Entities\Admin;
use Modules\Profile\Entities\Profile;


class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::get();
        return redirect()->route('admin.home.page' , compact($profile));
    }


    public function edit()
    {
        $user = Auth::user();
        $user->load(['profile']);
        $profile = $user->profile()->first();
        return view('profile::Dashboard.edit', compact('profile'));
    }


    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $user->load(['profile']);
        $user->profile()->delete();
        $user->profile()->create([
            $user->name = $request->name,
            $user->last_name = $request->last_name,
            $user->image = $request->image != null ? $request->image : $user->image,
            $user->birthday = $request->birthday,

        ]);

        return redirect()->route('admin.home.page' , compact('user'));
    }


    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->route('profile.index');
    }


    public function uploadImage($image, $path = 'images')
    {
        $image_name = time() . '-' . $image->getClientOriginalName();
        $file = Storage::putFileAs($path, $image, $image_name);
        return $file;
    }

}
