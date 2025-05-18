<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;


class ProfileUpdateController extends Controller
{
     public function editProfile()
    {
        return view('pages.editprofile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak cocok.']);
        }

        $user = Auth::user();
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('pages.editprofile')->with('status', 'Password berhasil diperbarui.');

    }
}
