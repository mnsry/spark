<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Field;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

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
        //$columns = Schema::getColumnListing('files');
        return view('file.index',[
            'files' => $files,
            //'columns' => $columns
        ]);
    }

    public function selectCategory()
    {
        $category_select = Category::find(request()->category_id);
        return view('file.selectCategory', [
            'category_select' => $category_select,
        ]);
    }

    public function createUser()
    {
        $category_select = Category::find(request()->category_id);
        return view('file.createUser', [
            'category_select' => $category_select,
        ]);
    }

    public function createLoc()
    {
        $category_select = Category::find(request()->category_id);
        $field_mahale = Field::find(1);
        $field_address = Field::find(3);
        return view('file.createLoc', [
            'category_select' => $category_select,
            'field_mahale' => $field_mahale,
            'field_address' => $field_address,
        ]);
    }

    public function createInfo()
    {
        $category_select = Category::find(request()->category_id);
        return view('file.createInfo', [
            'category_select' => $category_select,
        ]);
    }

    public function createOptional()
    {
        $category_select = Category::find(request()->category_id);
        return view('file.createOptional', [
            'category_select' => $category_select,
        ]);
    }

    public function createAdvance()
    {
        $category_select = Category::find(request()->category_id);
        return view('file.createAdvance', [
            'category_select' => $category_select,
        ]);
    }

    public function createPrice()
    {
        $category_select = Category::find(request()->category_id);
        return view('file.createPrice', [
            'category_select' => $category_select,
        ]);
    }

    public function createChange()
    {
        $category_select = Category::find(request()->category_id);
        return view('file.createChange', [
            'category_select' => $category_select,
        ]);
    }

    public function createMedia()
    {
        $category_select = Category::find(request()->category_id);
        return view('file.createMedia', [
            'category_select' => $category_select,
        ]);
    }

    public function create()
    {
        $category_select = Category::find(request()->category);
        return view('file.createUser', [
            'category_select' => $category_select,
        ]);
    }

    public function store(Request $request)
    {
        $file = File::create($request->all());
        return redirect()->route("file.index");
    }

    public function show(File $file)
    {
        return view('file.show',[
            'file' => $file
        ]);
    }

    public function edit(File $file)
    {
        //
    }

    public function update(Request $request, File $file)
    {
        //
    }

    public function destroy(File $file)
    {
        return redirect()->route('file.index');
    }
}
