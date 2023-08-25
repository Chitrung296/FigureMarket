<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    //product
    public function Product(){
        $data = Product::get();
        $cat = Category::get();
        $cates = DB::table('categories')->get();
        //return $data;
        return view('product.product-list',compact('data','cat', 'cates'));

    }

    public function productFilter(Request $request){
        $filter = Product::query();
            if($request->category){
                $filter = $filter->where('catID', $request->category);
            };
            if($request->min_price){
                $filter = $filter->where('productPrice', '>', $request->min_price);
            }

            if($request->max_price){
                $filter = $filter->where('productPrice', '<', $request->max_price);
            }
            // $filter->whereBetween('productPrice',[$request->min_price,$request->max_price]);
        $cates = DB::table('categories')->get();
        $data = $filter->get();
        return view('product.product-list',compact('data','cates'));
    }

    public function add()
    {
        $category = Category::get();
        return view('product.product-add',compact('category'));
    }public function save(Request $request)
    {

        $pro = new Product();
        $pro->productID = $request->id;
        $pro->productName = $request->name;
        $pro->productPrice = $request->price;
        $pro->productImage = $request->image;
        $pro->productDetails = $request->details;
        $pro->catID = $request->category;
        $pro->save();
        return redirect()->back()->with('success', 'Product added succư essfully!');
    }

    public function delete($id)
    {
        Product::where('productID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }
    public function edit($id)
    {
        $category = Category::get();
        $data = Product::where('productID', '=', $id)->first();
        return view('product.product-edit', compact('data', 'category'));
    }

    public function update(Request $request)
    {
        $img = $request->new_image == "" ? $request->old_image : $request->new_image;
        Product::where('productID', '=', $request->id)->update([
            'productName'=>$request->name,
            'productPrice'=>$request->price,
            'productImage'=>$img,
            'productDetails'=>$request->details,
            'catID'=>$request->category
        ]);
        return redirect()->back()->with('success', 'Product updated successfully!');
    }
}

