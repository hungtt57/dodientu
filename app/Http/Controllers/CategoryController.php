<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckCategoryRequest;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $allCategories= Category::all();
       return view('admin.pages.category.list_category',['allCategories'=>$allCategories]);
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
        return view('admin.pages.category.add',['allCategories'=>$allCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CheckCategoryRequest $request)
    {
        $category= new Category();
        $category->ten = $request->input('ten');
        $category->parent_id = $request->input('parent_id');
        $category->save();
        return redirect('/admin/category/list')->with(['flash_message'=>'Tạo thành công']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $parent= Category::all();
        $category=Category::find($id);
        return view('admin.pages.category.edit_category',compact('category','parent'));
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
        $category = Category::find($id);
        $category->ten = $request->input('ten');
           $category->parent_id = $request->input('parent_id');   

           $category->save();
        return redirect('admin/category/list')->with(['flash_message'=>'Sửa thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
         Category::find($id)->delete();
        return redirect('admin/category/list')->with(['flash_message'=>'Xóa thành công']);
    }
}
