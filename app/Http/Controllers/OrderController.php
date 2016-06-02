<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Order;
use App\Http\Controllers\Controller;
use DB;
use Request;
use App\Order_detail;
use App\Http\Requests\EditOrderRequest;
class OrderController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.pages.order.index')->with('orders',$orders);
    }

   
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $order=Order::find($id);
        $orderdetail=Order::find($id)->order_detail;
        return view('admin.pages.order.show')->with('order',$order)->with('order_details',$orderdetail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $order=Order::find($id);
        $order_details=Order::find($id)->order_detail;
     
        return view('admin.pages.order.edit',compact('order'))->with('order_details',$order_details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(EditOrderRequest $request, $id)
    {
        $order=Order::find($id);
        $order->tenkh = $request->input('tenkh');
         $order->sdtkh = $request->input('sdtkh');

          $order->emailkh = $request->input('emailkh');
           $order->ngaynhankh = $request->input('ngaynhankh');
            $order->diachikh = $request->input('diachikh');
         $order->ghichukh = $request->input('ghichukh');
           $order->trangthai = $request->input('trangthai');
         $order->save();
          return redirect('admin/order')->with(['flash_message'=>'Sửa thành công']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
            return redirect('admin/order')->with(['flash_message'=>'Xóa thành công']);
    }


    //ajax
    public function capnhat_order_detail(){
        if(Request::ajax()){
             $id=Request::get('id');
            
            $qty = (int) Request::get('qty');
            $orderdetail=Order_detail::find($id);

            if(!empty($orderdetail)){
                $orderdetail->soluong=$qty;
                $tongtien=$orderdetail->tongtien;
                $orderdetail->tongtien=$orderdetail->giasp*$qty;
                $orderdetail->save();
                $order=Order::find($orderdetail->order_id);
                $order->tongtien=$order->tongtien- $tongtien + $orderdetail->tongtien;
                $order->save();
                return number_format($orderdetail->tongtien,0);
            }
            return 'loi';
          

          
        }
    }

    public function xoa_order_detail(){
        if(Request::ajax()){

             $id=Request::get('id');
            
          
            $orderdetail=Order_detail::find($id);

            if(!empty($orderdetail)){
                  $order=Order::find($orderdetail->order_id);
                  $order->tongtien=$order->tongtien-$orderdetail->tongtien;
                  $order->save(); //update lại giá
               $orderdetail->delete();
               return 'oke';
            }
            return 'loi';
          

          
        }
    }
}
