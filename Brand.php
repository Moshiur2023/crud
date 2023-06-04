<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    use HasFactory;
    private static $brand;

    public static function saveBrand($request)
    {
        self::$brand = new Brand();
        self::$brand->brand_name = $request->brand_name;
        self::$brand->save();
    }

    public static function updateBrand($request)
    {
        self::$brand = Brand::find($request->id);
        self::$brand->brand_name = $request->brand_name;
        self::$brand->save();
    }


}
