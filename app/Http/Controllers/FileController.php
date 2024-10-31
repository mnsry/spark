<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class FileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $files = $user->files;
        $columns = Schema::getColumnListing('files');
        return view('file.index',[
            'files' => $files,
            'columns' => $columns
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function select()
    {
        $category_select = Category::find(request()->category);

        return view('file.select', [
            'category_select' => $category_select,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category_select = Category::find(request()->category);
        return view('file.create', [
            'category_select' => $category_select,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = File::create($request->all());
        return redirect()->route("file.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        return view('file.show',[
            'file' => $file
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        $file->delete();

        return redirect()->route('file.index');
    }
}
