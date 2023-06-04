<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('crud.category.create');
    }

    public function saveCategory(Request $request)
    {
        Category::saveCategory($request);
        return back();
    }

    public function allCategory()
    {
        return view('crud.category.read',
        [
            'categories'=>Category::all()
        ]);
    }

    public function status($id)
    {
       $category = Category::find($id);
       if ($category->status ==1)
       {
           $category->status =0;
       }
       else
       {
           $category->status =1;
       }
       $category->save();
       return back();
    }

    public function edit($id)
    {
        return view('crud.category.edit',
            [
                'categories'=>Category::find($id)
            ]);
    }

    public function update(Request $request)
    {
        Category::updateCategory($request);
        return redirect('all-category');
    }

//    public function delete($id)
//    {
////        $this->category =Category::find($id);
////        $this->category->delete();
//        $category =Category::find($id);
//        $category->delete();
//        return back();
//    }
    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        return back();
    }
}
