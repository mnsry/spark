<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $files = $user->files;

        return view('file.index',[
            'files' => $files,
        ]);
    }

    public function select()
    {
        $category_select = Category::find( request('category_id') );

        return view('file.select', [
            'category_select' => $category_select,
        ]);
    }

    public function create(Request $request)
    {
        $category_select = Category::find( request('category_id') );

        $request->validate([
            'username' => 'required',
            'mobile' => 'required|min:10|max:14',
        ]);

        $user = User::firstOrCreate(
            ['mobile' => $request['mobile']],
            [
                'user_id' => auth()->id(),
                'name' => $request['username'],
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            ]
        );

        return view('file.create', [
            'category_select' => $category_select,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        File::create($request->all());
        return to_route('file.index');
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy()
    {
        //
    }
}
