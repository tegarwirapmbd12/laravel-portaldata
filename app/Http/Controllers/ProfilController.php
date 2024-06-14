<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function edit()
    {
        $users = User::all();
        return view('profil.edit',[
            'users' => $users
        ]);
    }
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255|',
            'username' => 'required|max:255|',
            'email' => 'required|',
        ]);
        $user = Auth::user();
        $user->fill($data);
        $user->save();

        return redirect('/profile')
        ->with('success', 'Profil Berhasil di Ubah');
    }
    public function changepassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (Hash::check($request->current_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect('/profile')->with('success', 'Password berhasil diperbarui.');
        }

        return redirect()->back()->with('error', 'Password lama salah.');
    }
}
