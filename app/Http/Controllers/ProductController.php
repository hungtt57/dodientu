<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\ImageDetail;
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
        Session::forget('key');
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
       Session::forget('key');
        $product= new Product;
        $product->name = $request->input('name');
        $product->alias = str_slug($product->name);
        $product->description = $request->input('description');
        $product->short_description = $request->input('short_description');
        $product->old_price = $request->input('old_price');
        $product->new_price = $request->input('new_price');
        $product->info = $request->input('info');
        if($request->input('new_price')==''){
            $product->sale = 0;
            $product->new_price = $request->input('old_price');
        }else{
            $product->sale = number_format((($product->old_price-$product->new_price)/$product->old_price)*100);
        }
        
        $product->category_id = $request->input('category_id');



        $product->image = $request->input('image');
         $product->save();
        if($request->input('imageDetail')==null){
           
        }else{
            $imageDetail = $request->input('imageDetail');
            foreach($imageDetail as $key => $value) {
                $image = new ImageDetail;
                $image->link = $value;
                $product->imageDetail()->save($image);
            }
        }

 
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
        Session::forget('key');
         $allCategories = [];
        if(!Session::has('categories_dequy')){
           
            $mainCategories = Category::where('parent_id', 0)->get();
            $allCategories = ProductController::getAllCategories($mainCategories);
            Session::put('categories_dequy',$allCategories);
        }else{
            $allCategories = Session::get('categories_dequy'); 
        }

        $product=Product::find($id);
        $image = $product->imageDetail()->get();
        return view('admin.pages.product.edit',compact('product'))->with('categories',$allCategories)->with('imageDetail',$image);
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
       Session::forget('key');
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
           $product->image = $request->input('image');
         $product->save();

        $imageDetail = $product->imageDetail()->get();
        foreach ($imageDetail as $key => $value) {
           $value->delete();
        }

        if($request->input('imageDetail')==null){
           
        }else{
            $imageDetail = $request->input('imageDetail');
            foreach($imageDetail as $key => $value) {
                $image = new ImageDetail;
                $image->link = $value;
                $product->imageDetail()->save($image);
            }
        }

        return redirect('admin/product')->with(['info'=>'Sửa thành công']);
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
