<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.pegawai.register', [
            'title' => 'Register',
            'active' => 'list-user'
        ]);
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255|unique:users',
        //     'email' => 'required|unique:users',
        //     'password' => 'required|min:5|max:255'
        // ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // User::create($validatedData);



        // return redirect('/register')->with('success', 'Registrasi User Berhasil');

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        };
        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect('/list-user')->with('success', 'Registrasi User Berhasil');
    }

}
