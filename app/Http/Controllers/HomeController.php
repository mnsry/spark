<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usersCount = User::count();
        $usersLast = User::latest()->first();
        $filesCount = File::count();
        $filesLast = File::latest()->first();
        return view('home',[
            'usersCount' => $usersCount,
            'usersLast' => $usersLast,
            'filesCount' => $filesCount,
            'filesLast' => $filesLast,
        ]);
    }

    public function user()
    {
        $users = User::all();
        return view('user',[
            'users' => $users,
        ]);
    }

    public function userUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = User::find(auth()->id());
        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->store("users",['disk' => 'public']);
            $user->avatar = $path;
        }
        $user->name = $request->name;
        $user->save();

        return back();
    }
}
