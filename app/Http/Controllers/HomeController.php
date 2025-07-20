<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Field;
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
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'mobile' => ['digits:11', 'unique:users,mobile,' . auth()->id()],
        ]);
        $user = User::find(auth()->id());
        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->store("users",['disk' => 'public']);
            $user->avatar = $path;
        }
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->save();

        return back();
    }

    public function search()
    {
        return view('search.index');
    }

    public function searchSelect()
    {
        $category_select = Category::find( request('category_id') );

        return view('search.select', [
            'category_select' => $category_select,
        ]);
    }

    public function searchShowFields()
    {
        $category_select = Category::find( request('category_id') );

        return view('search.showFields', [
            'category_select' => $category_select,
        ]);
    }

    public function searchSelectField()
    {
        $category_select = Category::find( request('category_id') );
        $field_select = Field::find( request('field_id') );

        return view('search.selectField', [
            'category_select' => $category_select,
            'field' => $field_select,
        ]);
    }

    public function searchFind(Request $request)
    {
        $category_select = Category::find( request('category_id') );
        $field_select = Field::find( request('field_id') );
        if ($field_select->form == 'NUMBER'){

            $files = $category_select->files()->where($field_select->slug = 2800)->get();
            return view('search.find', [
                'category_select' => $category_select,
                'field' => $field_select,
                'files' => $files,
            ]);
        }
        if ($field_select->form == 'SELECT' ||
            $field_select->form == 'MULTISELECT' ||
            $field_select->form == 'CHECKBOX' ||
            $field_select->form == 'MULTICHECKBOX')
        {

            $files = File::orderBy('id', 'DESC')->get();
            return view('search.find', [
                'category_select' => $category_select,
                'field' => $field_select,
                'files' => $files,
            ]);
        }
        return view('search.error', [
            'category_select' => $category_select,
            'field' => $field_select,
        ]);
    }

    public function comision()
    {
        return view('comision');
    }
}
