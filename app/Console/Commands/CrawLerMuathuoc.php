<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Carbon\Carbon;
use File;
use Log;
use Sunra\PhpSimple\HtmlDomParser;

use App\Category;
use App\Product;

class CrawlerMuathuoc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawlermuathuoc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lay thong tin tu muathuoc.vn';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
             $urls = [
            1 => 'http://www.muathuoc.vn/Hooc-mon-va-noi-tiet.html',
            2 => 'http://www.muathuoc.vn/Lam-dep-chong-lao-hoa.html',
            3 => 'http://www.muathuoc.vn/Sinh-ly-nu.html',
            4 => 'http://www.muathuoc.vn/Sinh-Ly-Nam.html',
            5 => 'http://www.muathuoc.vn/Suc-khoe-tre-em.html',
            6 => 'http://www.muathuoc.vn/Thuc-pham-giam-can.html',
            7 => 'http://www.muathuoc.vn/Dieu-tri-benh-dai-thao-duong-92.html',
            8 => 'http://www.muathuoc.vn/Giam-Stress-va-giac-ngu.html',
            9 => 'http://www.muathuoc.vn/Thuoc-tim-mach-Huyet-ap.html',
            10 => 'http://www.muathuoc.vn/Bo-sung-canxi-Vitamin-D.html',
            11 => 'http://www.muathuoc.vn/Suc-khoe-tieu-hoa.html',
            12 => 'http://www.muathuoc.vn/Thuoc-tranh-thai.html',
            13 => 'http://www.muathuoc.vn/Cham-soc-toc-va-mong.html'
        ];
         foreach ($urls as $key => $url) {

             $this->comment('>>> Geting from :'.$url);
          
            $html = HtmlDomParser::file_get_html($url);
            $danh_muc= $html->find('#nav_link a',2)->plaintext;

            $category=Category::where('alias','=',str_slug($danh_muc))->first();
            if($category){
                  $this->line('>>> Existed --- :'.$danh_muc);
                $category_id=$category->id;
            }else{
                $category_new=new Category;
                $category_new->ten=$danh_muc;
                $category_new->alias=str_slug($danh_muc);
                $category_new->parent_id=0;
                $category_new->save();
                $category_id=$category_new->id;
                $this->line('>>> Create success ---  :'.$danh_muc);
            }
            $linksp= $this->boc_tach_link_sp($url.'?numPage=100');
            foreach ($linksp as $key => $value) {
                
                     $this->lay_thong_tin_sp($value,$category_id);
            }
            
           
        }
        $this->line('>>>End crawler--- :');
         sleep(0);
          Log::warning('crawler mua thuoc');

    } //end handle

     public function boc_tach_link_sp($url){
        $html = HtmlDomParser::file_get_html($url);
        $linksp=$html->find('.product_list .product_cat_item .thumb');
        $san_pham=[];
        foreach ($linksp as $key => $value) {
            if($value->href!=NULL){
                 $san_pham[]='http://www.muathuoc.vn'.$value->href;
            }
           
        }
        return $san_pham;

    }
    public function lay_thong_tin_sp($url,$category_id){
        $html = HtmlDomParser::file_get_html($url);
        $tensp=$html->find('#pro_detail_name span',0)->plaintext;
        $alias=str_slug($tensp);
        if($html->find('.bold span.green')){
            $gia=$html->find('.bold span.green',0)->plaintext;
        }else{
            $gia=$html->find('.bold span.red',0)->plaintext;
        }
        $gia=explode(' ',$gia)[0];
    
        $masp=$html->find('.pro_detail_teaser div span',2)->plaintext;
            
        $donggoi=  $html->find('.pro_detail_teaser div span',4)->plaintext;
        $congdung=$html->find('.pro_detail_use',0)->innertext;
       $cachdung=$html->find('.pro_detail_description',0)->innertext;
       // or  $cachdung=$html->find('.pro_detail_label',0)->innertext;
       $linkanh=$html->find('.image .lazy',0)->src;
        $sanpham=Product::where('alias','=',$alias)->first();
       if($sanpham){
            $sanpham->gia=format_gia($gia);
            $sanpham->masp=$masp;
            $sanpham->congdung=$congdung;
            $sanpham->cachdung=$cachdung;
             $sanpham->donggoi=$donggoi;
            $sanpham->category_id=$category_id;
            $sanpham->save();
              $this->line('>>> Update success Product---  :'.$tensp);
           
       }else{

        $anhdaidien=$this->tai_anh('http://www.muathuoc.vn'.$linkanh,$alias);
        $sanpham=new Product;
        $sanpham->ten=$tensp;
        $sanpham->alias=$alias;
        $sanpham->gia=format_gia($gia);
            $sanpham->masp=$masp;
            $sanpham->donggoi=$donggoi;
            $sanpham->congdung=$congdung;
            $sanpham->cachdung=$cachdung;
            $sanpham->category_id=$category_id;
            $sanpham->anhdaidien=$anhdaidien;
            $sanpham->save();
            $this->line('>>>Create success Product---  :'.$tensp);
       }


    }
    public function tai_anh($url,$ten_hinh=''){
        $thu_muc_chua = '/crawler/';
        if ( ! File::isDirectory(public_path() . $thu_muc_chua)) {
            File::makeDirectory(public_path() . $thu_muc_chua);
        }

        $ten_hinh = $ten_hinh.md5(microtime());
        $duoi_file = explode('.', $url);
        $duoi_file = $duoi_file[count($duoi_file)-1];

        $file_path_absolute = public_path() . $thu_muc_chua . $ten_hinh . '.' .  $duoi_file;
        $file_path_relative = $thu_muc_chua . $ten_hinh . '.' .  $duoi_file;

        
        $img_binary = @file_get_contents($url);
        if ($img_binary == false) {
            $this->error('Something went wrong! Can\'t dowload image');
            return false;
        }

        if (File::put($file_path_absolute, $img_binary));
            return 'public'.$file_path_relative;

        return false;



    }



}
