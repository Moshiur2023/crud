<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        return view('crud.brand.create');
    }
    public function saveBrand(Request $request)
    {
        Brand::saveBrand($request);
        return back();
    }
    public function allBrand()
    {
        return view('crud.brand.read',
            [
                'brands'=>Brand::all()
            ]);
    }

    public function status($id)
    {
        $brand = Brand::find($id);
        if ($brand->status ==1)
        {
            $brand->status =0;
        }
        else
        {
            $brand->status =1;
        }
        $brand->save();
        return back();
    }

    public function edit($id)
    {
        return view('crud.brand.edit',
            [
                'brands'=>Brand::find($id)
            ]);
    }

    public function update(Request $request)
    {
        Brand::updateBrand($request);
        return redirect('all-brand');
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
        $brand= Brand::find($request->id);
        $brand->delete();
        return back();
    }
}
