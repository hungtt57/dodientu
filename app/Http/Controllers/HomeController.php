<?php
namespace App\Http\Controllers;
use App\Category;
use App\Http\Controllers\Controller;
use DB,Cart;
use App\Product;
use App\ImageDetail;
use Request;
//use Illuminate\Http\Request;
use App\Blog;
use App\Http\Requests\CheckThanhtoanRequest;
use App\Order;
use App\Order_detail;
use Mail;
use Illuminate\Pagination\Paginator;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categories= Category::where('parent_id','=',0)->get();
        $allCategories= Category::where('parent_id','!=',0)->get(); 
        $products = Product::all();
        $banners = DB::table('imagebanner')->where('banner_id','1')->orderby('id','desc')->take(3)->get();
        $logo = DB::table('imagelogo')->where('logo_id','1')->first();
        $banner_event = DB::table('imagebanner')->where('banner_id','3')->orderby('id','desc')->first();
        $products_new = DB::table('products')->orderby('id','asc')->take(8)->get();
       return view('front-end.pages.home',compact('allCategories','Categories','products','banners','logo','banner_event','products_new'));
    }
    public function loaisanpham($tenloai)
    {
         $name_cate = DB::table('categories')->select('name','id')->where('alias',$tenloai)->first();
        $product_cates = DB::table('products')->select('*')->where('category_id',$name_cate->id)->paginate(15);
       $banners = DB::table('imagebanner')->where('banner_id','2')->orderby('id','desc')->take(3)->get();
        return view('front-end.pages.category',compact('name_cate','product_cates','banners'));
    }
    public function chitietsanpham($tenloai){
        $product_detail  = Product::where('alias',$tenloai)->first();
       $category = DB::table('categories')->where('id',  $product_detail->category_id)->first();
       $image_details =$product_detail->imageDetail()->get();
       $product_cate =DB::table('products')->where('category_id',$product_detail->category_id)->where('id','<>',$product_detail->id)->get();
       $product_sale=DB::table('products')->where('sale','<>','0')->take(3)->get();
        return view('front-end.pages.product_detail',compact('product_detail','category','image_details','product_cate','product_sale'));
    }

    public function loc(Request $request){
      $value = Request::get('price');
      $tenloai = Request:: get('tenloai');
      $category_id = DB::table('categories')->select('id','name')->where('name',$tenloai)->first();

      if($value == 1 ){
        $product_filter =   DB::table('products')->select('*')->where('category_id',$category_id->id)->where('new_price','<','500000')->paginate(12);
      
      }
       else if($value == 2 ){
        $product_filter =   DB::table('products')->select('*')->where('category_id',$category_id->id)->where('new_price','>=','500000')->where('new_price','<','1000000')->paginate(12);
       
      }
      else if($value == 3 ){
        $product_filter =   DB::table('products')->select('*')->where('category_id',$category_id->id)->wwhere('new_price','>=','1000000')->where('new_price','<','20000000')->paginate(12);
    
      }
      else if($value ==4 ){
        $product_filter =   DB::table('products')->select('*')->where('category_id',$category_id->id)->where('new_price','>=','2000000')->where('new_price','<','10000000')->paginate(12);
       
      }
      else if($value == 5 ){
        $product_filter =   DB::table('products')->select('*')->where('category_id',$category_id->id)->where('new_price','>=','10000000')->get();
      }

      return view('front-end.pages.filter',compact('category_id','product_filter'));
      
    }
  /*  public function muahang($id){

        $qty = Request::get("qty");
        $product_buy = DB::table('products')->where('id',$id)->first();
        Cart::add(array('id'=> $id,'name'=> $product_buy->ten,'qty'=>$qty,'price'=> format_gia($product_buy->gia), 'options' => array('image' => $product_buy->anhdaidien)));
        $content=Cart::content();
        return redirect()->back()->with('flash_message','1');
    }
     public function giohang(){
        $content = Cart::content();
        $total = Cart::total();
        return view('frontend.pages.cart',compact('content','total'));
    }*/
    public function timkiem(Request $request){
        $key=Request::get('search');
         if($key=="" || $key==" "){
            return redirect()->back();
         }
      
        $products=Product::where('name','like','%'.$key.'%')->paginate(10,['*'],'product');

        $products->setPageName('product');   

       return view('front-end.pages.search',compact('products','key'));
    }

      public function lienhe(){
      $allCategories= Category::all();
    //  $blogs = DB::table('blog')->select('id','title','description','image','alias')->orderBy('id','ASC')->limit(2)->get();
       return view('front-end.pages.contact',compact('allCategories'));
    }
    
     public function xoasanpham($id){
        Cart::remove($id);
        return redirect('/giohang');
    }
   
    public function khuyenmai(){
        $allBlogs=DB::table('blogs')->paginate(10);
        $recent_blogs = DB::table('blogs')->orderBy('id','DESC')->limit(2)->get();
       return view('front-end.pages.blog',compact('allBlogs','recent_blogs'));
    }
    public function khuyenmai_detail($alias){
        $blog_detail = DB::table('blogs')->where('alias',$alias)->first();
        $recent_blogs = DB::table('blogs')->orderBy('id','DESC')->limit('2')->get(); 
        return view('front-end.pages.blog_detail',compact('blog_detail','recent_blogs'));
    }

   /* public function about(){
      $allCategories= Category::all();
      $blogs = DB::table('blog')->select('id','title','description','image','alias')->orderBy('id','ASC')->limit(2)->get();
       return view('frontend.pages.about',compact('allCategories','blogs'));
    }

  
    public function xoaspcart(){
        if(Request::ajax()){
             $id=Request::get('rowid');
              Cart::remove($id);
              echo Cart::total();
        }
    }

    public function capnhatcart(){
         if(Request::ajax()){
             $rowid=Request::get('rowid');
            
            $qty = Request::get('qty');
            Cart::update($rowid,array('qty'=>$qty));

            echo Cart::total();
        }
    }



    public function thanhtoan(CheckThanhtoanRequest $request){
        
        $content=Cart::content();
            
        $tenkh=$request->input('tenkh');
        $emailkh=$request->input('emailkh');
        $sdtkh=$request->input('sdtkh');
        $ngaynhankh=$request->input('ngaynhankh');
        $diachikh=$request->input('diachikh');
        $ghichukh=$request->input('ghichukh');
        
        $order= new Order;
        $order->sdtkh=$sdtkh;
        $order->emailkh=$emailkh;
        $order->tenkh=$tenkh;
        $order->ghichukh=$ghichukh;
        $order->ngaydatkh=date('Y-m-d');
        $order->ngaynhankh=$ngaynhankh;
        $order->diachikh=$diachikh;
        $order->tongtien=Cart::total();
        $order->trangthai=0;
        $order->save();
        
        foreach ($content as $key => $item) {
              
                $orderdetail=new Order_detail;
                $orderdetail->order_id=$order->id;
                $orderdetail->tensp=$item['name'];
                $orderdetail->giasp=$item['price'];

                $orderdetail->soluong=$item['qty'];
               
                $orderdetail->anh=$item['options']['image'];
    
                $orderdetail->tongtien=$item['subtotal'];
                
                $orderdetail->save();
        }
    
        
        $info=Order::find($order->id)->order_detail->toArray();
        $order=$order->toArray();
       
          $data = array(
                  'order' => $order,
                  'orderdetail'=>$info
                  );
        
          Mail::queue('admin.email.order', $data, function ($message) use ($data){

          $message->from('hin1471994@gmail.com', 'Thông tin đơn hàng');

           $message->to($data['order']['emailkh'])->subject('Xác nhận đặt hàng!!');

           });

          Cart::destroy();
         return redirect('/')->with('message','Checkout successed!!Please check mail to know more info order!!');
    }
*/







}