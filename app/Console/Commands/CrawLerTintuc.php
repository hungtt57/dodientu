<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Carbon\Carbon;
use File;
use Log;
use Sunra\PhpSimple\HtmlDomParser;
use GuzzleHttp\Client;
use App\Category;
use App\Blog;

class CrawlerTintuc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawlertintuc';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'tin tuc tu trang tapchi y duoc';

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
            1 => 'http://tapchiyduoc.com/thuoc-gia-dinh/nhung-dieu-nen-biet.html',
            2 => 'http://tapchiyduoc.com/thuoc-suc-khoe/tac-dung-phu-cua-thuoc.html',
            3 => 'http://tapchiyduoc.com/thuoc-gia-dinh/nhung-dieu-nen-biet.html',
            4 => 'http://tapchiyduoc.com/thuoc-gia-dinh/tu-thuoc-gia-dinh.html',
        ];

         foreach ($urls as $key => $url) {
                $array=[];

               $array= $this->lay_link_full($url);
            $this->line("Start Crawler");
               for($i=0;$i<sizeof($array);$i++){ //link full 1 url
               
                    $this->get_link_bai_viet($array[$i]);
                                      }
               exit();
      
        }
        $this->line('>>>End crawler--- :');
         sleep(0);
  Log::warning('crawler mua thuoc');
    } //end handle


    public function lay_link_full($url){ // tao link full khi phan trang
            $array=[];
            $array[]=$url;
            for($i=10;$i<=80;$i=$i+10){
                $array[]=$url.'?start='.$i;
            }
            return $array;

    }
     
    public function get_link_bai_viet($url){

        $html = HtmlDomParser::file_get_html($url);

        $this->line('get lay link tu '.$url);

        $linksp = $html->find('.article_row .article_column .article_column_pad');
        foreach ($linksp as $key => $value) {

          
            $title=$value->find('.contentheading a',0)->plaintext; //title
            $alias=str_slug($title);
            $blog = Blog::where('alias','=',$alias)->first();

             if($blog){
                continue;
             }else{
                $description=$value->find('p',1)->plaintext;
                $tenanhthumb = $this->tai_anh_thumb('http://tapchiyduoc.com'.$value->find('.crop img',0)->src);
                $html2 = HtmlDomparser::file_get_html('http://tapchiyduoc.com'.$value->find('.contentheading a',0)->href);
                $content= $html2->find('#page .full-text > div ',5)->innertext;
                $content=$this->xu_ly_hinh_chi_tiet_bai_viet($content); // xu ly anh trong bai viet

                $blog1=new Blog;
                $blog1->title=$title;
                $blog1->description=$description;
                $blog1->alias=$alias;
                $blog1->image=$tenanhthumb;
                $blog1->content=$content;
                $blog1->save();
                $this->line('Tao thanh cong '.$title);
             }
            
          
        }

    }
   
    public function xu_ly_hinh_chi_tiet_bai_viet($noi_dung){
        $html = HtmlDomParser::str_get_html($noi_dung);
        foreach($html->find('img') as $img)
        {

            $link_hinh = $this->tai_anh_detail('http://tapchiyduoc.com'.$img->src, $ten_hinh = '');
            $noi_dung = str_replace($img->src, $link_hinh, $noi_dung);
        }
        return $noi_dung;
    }



      public function tai_anh_thumb($url,$ten_hinh=''){
        $thu_muc_chua = '/image/blog/thumb/';
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

     public function tai_anh_detail($url,$ten_hinh=''){
        $thu_muc_chua = '/image/blog/detail/';
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
            return '/public'.$file_path_relative;

        return false;

    }


    
   
  
    


}
