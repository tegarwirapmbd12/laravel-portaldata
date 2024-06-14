<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ListUserController extends Controller
{
    public function index(Request $request)
    {
        $listusers = User::paginate(10)->withQueryString();
        $searchQuery = $request->input('search');
        $query = User::query();
        if ($searchQuery) {
            $query->where('name', 'LIKE', "%$searchQuery%")
                 ->orWhere('username', 'LIKE', "%$searchQuery%");
            }
            $listusers = $query->paginate(10);
            $request->flash();
        return view('list-user.index', [
            'listusers' => $listusers,
            'active' => 'list-user'
        ]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|',
            'username' => 'required|max:255|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        if ($validator->fails()) {
            return redirect('/list-user')
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

    public function destroy($id)
    {
        $listusers = User::find($id);
        $listusers->delete();

        return redirect()->back()
        ->with('success', 'User Berhasil di Hapus');
    }
}
