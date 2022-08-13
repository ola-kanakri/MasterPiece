<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data= Category::orderBy('id', 'ASC')->filter(request(['search']))->oldest()->paginate(10);
        return view("admin.categories.index",compact("data"));
    }

    public function showCategory()
    {
        $data= Category::all();
        return view("pages.index",compact("data"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $input['image'] = "$filename";

        }


        Category::create($input);


        return redirect()->route('categories.index')->with('message','category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        $categories = Category::all();
        if (auth()->user()){
            $packages = Package::where('city_id', auth()->user()->city_id)->Where('category_id', $category->id)->Where('status', 1)->latest()->paginate(12);
            return view('pages.donations', compact('packages','category','categories'));
        }
            $packages = Package::Where('category_id',  $category->id)->Where('status', 1)->latest()->paginate(12);
            return view('pages.donations', compact('packages','category','categories'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {


      $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'image' => 'image',

        ]);

        $input = $request->all();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('Image'), $filename);
            $input['image'] = "$filename";

        }




         $category->update($input);
        return redirect()->route('categories.index')->with('message','category updated successfully.');

    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')
        ->with('message', 'category deleted successfully');
    }





}






