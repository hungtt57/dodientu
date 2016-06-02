<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use Slug;
use DB;
use File;
use Image;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $products= Product::all();
       return view('admin.pages.product.list',['products'=>$products]);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
             $allCategories= Category::all();
        return view('admin.pages.product.create',['category'=>$allCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        
        $product= new Product;
        $product->ten = $request->input('ten');
        $product->masp = $request->input('masp');
        $product->congdung = $request->input('congdung');
        $product->cachdung = $request->input('cachdung');
        $product->donggoi = $request->input('donggoi');
        $product->category_id = $request->input('category_id');
        $anhdaidien = $request->file('anhdaidien');

         if($anhdaidien){
              $filename = str_slug($product->ten).'.' . $anhdaidien->getClientOriginalExtension();
            $path = public_path().'/image/product/anhdaidien/' . $filename;
                Image::make($anhdaidien->getRealPath())->resize(400, 520)->save($path);
                $product->anhdaidien= 'public/image/product/anhdaidien/' . $filename;

            $paththumb= public_path().'/image/product/thumb/thumb' . $filename;
             Image::make($anhdaidien->getRealPath())->resize(200, 200)->save($paththumb);
              $product->thumb= 'public/image/product/thumb/thumb' . $filename;
        }


         $product->save();
        return redirect('admin/product')->with(['flash_message'=>'Tạo thành công']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product= Product::find($id);
        return view('admin.pages.product.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $mainCategories = Category::where('parent_id', 0)->get();
        $allCategories = ProductController::getAllCategories($mainCategories);
        $product=Product::find($id);
        return view('admin.pages.product.edit',compact('product'))->with('categories',$allCategories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::find($id);
        
        $product->ten = $request->input('ten');
        $product->masp = $request->input('masp');
        $product->congdung = $request->input('congdung');
        $product->cachdung = $request->input('cachdung');
        $product->donggoi = $request->input('donggoi');
        $product->category_id = $request->input('category_id');


          if(!empty($request->file('anhdaidien'))){
            $anhdaidien=$request->file('anhdaidien');
                 File::delete($product->anhdaidien);
                File::delete($product->thumb);

                     $filename = str_slug($product->ten).'.' . $anhdaidien->getClientOriginalExtension();
            $path = public_path().'/image/product/anhdaidien/' . $filename;
                Image::make($anhdaidien->getRealPath())->resize(400, 520)->save($path);
                $product->anhdaidien= 'public/image/product/anhdaidien/' . $filename;

            $paththumb= public_path().'/image/product/thumb/thumb' . $filename;
             Image::make($anhdaidien->getRealPath())->resize(200, 200)->save($paththumb);
              $product->thumb= 'public/image/product/thumb/thumb' . $filename;
        
        }

        $product->save();

        return redirect('admin/product')->with(['flash_message'=>'Tạo thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
       File::delete($product->anhdaidien);
        File::delete($product->thumb);
        $product->delete();
        return redirect('admin/product/')->with(['flash_message'=>'Xóa thành công']);


    }


    private function getAllCategories($categories) {
        $allCategories = array();

        foreach ($categories as $category) {
            $subArr = array();
            $subArr['ten'] = $category->ten;
            $subArr['id'] = $category->id;
            $subArr['parent_id'] = $category->parent_id;


            $subCategories = Category::where('parent_id', '=', $category->id)->get();

            if (!$subCategories->isEmpty()) {
                $result = ProductController::getAllCategories($subCategories);

                $subArr['sub'] = $result;
            }

            $allCategories[] = $subArr;
        }

        return $allCategories;
    }
}
