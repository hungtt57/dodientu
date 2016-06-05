<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\CheckEditProductRequest;
use Slug;
use DB;
use File;
use Image;
use Session;
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
        $allCategories = [];
        if(!Session::has('categories_dequy')){
           
            $mainCategories = Category::where('parent_id', 0)->get();
            $allCategories = ProductController::getAllCategories($mainCategories);
            Session::put('categories_dequy',$allCategories);
        }else{
            $allCategories = Session::get('categories_dequy'); 
        }
        return view('admin.pages.product.create',['categories'=>$allCategories]);
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
        $product->name = $request->input('name');
        $product->alias = str_slug($product->name);
        $product->description = $request->input('description');
        $product->short_description = $request->input('short_description');
        $product->old_price = $request->input('old_price');
        $product->new_price = $request->input('new_price');
        if($request->input('new_price')==''){
            $product->sale = 0;
            $product->new_price = $request->input('old_price');
        }else{
            $product->sale = number_format((($product->old_price-$product->new_price)/$product->old_price)*100);
        }
        
        $product->category_id = $request->input('category_id');

        // $anhdaidien = $request->file('image');

        //  if($anhdaidien){
        //       $filename = str_slug($product->name).'.' . $anhdaidien->getClientOriginalExtension();
        //     $path = public_path('image/anhdaidien/' . $filename);
        //         Image::make($anhdaidien->getRealPath())->resize(400, 520)->save($path);
        //         $product->anhdaidien= 'public/image/anhdaidien/' . $filename;
        // }



         $product->save();
        return redirect('admin/product')->with(['success'=>'Tạo thành công']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product='';
        $allCategories = [];
        if(!Session::has('product_'+$id)){
            $product= Product::find($id);
            Session::put('product_'+$id,$product);
        }else{
           $product = Session::get('product_'+$id);
        }

        $category_name = Category::where('id','=',$product->category_id)->first()->name;
        return view('admin.pages.product.show')->with('product',$product)->with('category_name',$category_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $allCategories = [];
        if(!Session::has('categories_dequy')){
           
            $mainCategories = Category::where('parent_id', 0)->get();
            $allCategories = ProductController::getAllCategories($mainCategories);
            Session::put('categories_dequy',$allCategories);
        }else{
            $allCategories = Session::get('categories_dequy'); 
        }

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
    public function update(CheckEditProductRequest $request, $id)
    {
        $product=Product::find($id);
         $product->name = $request->input('name');
        $product->alias = str_slug($product->name);
        $product->description = $request->input('description');
        $product->short_description = $request->input('short_description');
        $product->old_price = $request->input('old_price');
        $product->new_price = $request->input('new_price');
        if($request->input('new_price')==''){
            $product->sale = 0;
            $product->new_price = $request->input('old_price');
        }else{
            $product->sale = number_format((($product->old_price-$product->new_price)/$product->old_price)*100);
        }
        $product->category_id = $request->input('category_id');
        //   if(!empty($request->file('anhdaidien'))){
        //     $anhdaidien=$request->file('anhdaidien');
        //          File::delete($product->anhdaidien);
        //         File::delete($product->thumb);

        //              $filename = str_slug($product->ten).'.' . $anhdaidien->getClientOriginalExtension();
        //     $path = public_path().'/image/product/anhdaidien/' . $filename;
        //         Image::make($anhdaidien->getRealPath())->resize(400, 520)->save($path);
        //         $product->anhdaidien= 'public/image/product/anhdaidien/' . $filename;

        //     $paththumb= public_path().'/image/product/thumb/thumb' . $filename;
        //      Image::make($anhdaidien->getRealPath())->resize(200, 200)->save($paththumb);
        //       $product->thumb= 'public/image/product/thumb/thumb' . $filename;
        
        // }

        $product->save();

        return redirect('admin/product')->with(['info'=>'Tạo thành công']);
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
        return redirect('admin/product/')->with(['danger'=>'Xóa thành công']);


    }


    private function getAllCategories($categories) {
        $allCategories = array();

        foreach ($categories as $category) {
            $subArr = array();
            $subArr['name'] = $category->name;
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
