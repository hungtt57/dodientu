<?php 
function slug($str){
    if(!$str) return false;
    $unicode = array(
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|A|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'b'=>'B','c'=>'C','d'=>'d|D|đ|Đ',
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|E|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'f'=>'F','g'=>'G','h'=>'H',
        'i'=>'í|ì|ỉ|ĩ|ị|I|Í|Ì|Ỉ|Ĩ|Ị',
        'j'=>'J','k'=>'K','l'=>'L','m'=>'M','n'=>'N',
        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|O|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Õ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'p'=>'P','q'=>'Q','r'=>'R','s'=>'S','t'=>'T',
        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|U|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'v'=>'V','w'=>'W','x'=>'X',
        'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Y|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        'z'=>'Z',
        );
    foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
    return str_slug($str, '-');
}
function category_name($id){
    $category=DB::table('categories')->where('id',$id)->first();
    return $category;
}
 function category_parent(){
    $Categories = Category::where('parent_id','=',0)->get();
   return $Categories;
 }
 function category_childs(){
    $allCategories = Category::where('parent_id','!=',0)->get();
   return $allCategories;
 }
  
function getCategory(){
    $category=DB::table('categories')->get();
    return $category;
}


function substrword($text, $maxchar=30, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output;
}


function countProduct(){
    $product=DB::table('products')->count();
    return $product;
}


function getProductDasboard(){
    $product=DB::table('products')->orderby('created_at','desc')->limit(5)->get();
    return $product;
}

function getProductCategory($category_id){
    $product=DB::table('products')->where('category_id','=',$category_id)->limit(5)->get();
    return $product;
}
function getBanner(){
    $banner=DB::table('banner')->get();
    return $banner;
}


    function cate_parent($data,$parent= 0,$str='--', $select=0,$category_id=-1){
        foreach ($data as $key => $val) {
           $id=$val['id'];
           $name=$val['name'];
           if($val["parent_id"]== $parent){ 
                if($select!=0 && $id==$select){
                     echo "<option value='$id' selected='selected'>$str $name</option>";
                 }else{
                    if($val["parent_id"]==$category_id || $id==$category_id){
                        echo "<option value='$id' style='color:red' disabled>$str $name</option>";
                       $category_id=$id;
                    }else{
                        echo "<option value='$id'>$str $name</option>";
                    }
                    


                 }
                 cate_parent($data,$id,$str."--",$select,$category_id);
            }
        }


    }







function convert_number_to_words($number) {

    $hyphen      = ' ';
    $conjunction = '  ';
    $separator   = ' ';
    $negative    = 'âm ';
    $decimal     = ' phẩy ';
    $dictionary  = array(
        0                   => 'Không',
        1                   => 'Một',
        2                   => 'Hai',
        3                   => 'Ba',
        4                   => 'Bốn',
        5                   => 'Năm',
        6                   => 'Sáu',
        7                   => 'Bảy',
        8                   => 'Tám',
        9                   => 'Chín',
        10                  => 'Mười',
        11                  => 'Mười một',
        12                  => 'Mười hai',
        13                  => 'Mười ba',
        14                  => 'Mười bốn',
        15                  => 'Mười năm',
        16                  => 'Mười sáu',
        17                  => 'Mười bảy',
        18                  => 'Mười tám',
        19                  => 'Mười chín',
        20                  => 'Hai mươi',
        30                  => 'Ba mươi',
        40                  => 'Bốn mươi',
        50                  => 'Năm mươi',
        60                  => 'Sáu mươi',
        70                  => 'Bảy mươi',
        80                  => 'Tám mươi',
        90                  => 'Chín mươi',
        100                 => 'trăm',
        1000                => 'ngàn',
        1000000             => 'triệu',
        1000000000          => 'tỷ',
        1000000000000       => 'nghìn tỷ',
        1000000000000000    => 'ngàn triệu triệu',
        1000000000000000000 => 'tỷ tỷ'
        );

        if (!is_numeric($number)) {
            return false;
        }

        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
            trigger_error(
                'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
                E_USER_WARNING
                );
            return false;
        }

        if ($number < 0) {
            return $negative . convert_number_to_words(abs($number));
        }

        $string = $fraction = null;

        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true) {
            case $number < 21:
            $string = $dictionary[$number];
            break;
            case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
            case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
            default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
        }

        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }

        return $string;
        }


         function getCategories($categories) {
                            $allCategories = array();

                            foreach ($categories as $category) {
                                $subArr = array();
                                $subArr['name'] = $category->name;
                                $subArr['id'] = $category->id;
                                $subArr['parent_id'] = $category->parent_id;


                                $subCategories = DB::table('categories')->where('parent_id',$category->id)->get(); 
                                if ($subCategories!=null) {
                                    $result = getCategories($subCategories);

                                    $subArr['sub'] = $result;
                                }

                                $allCategories[] = $subArr;
                            }

                            return $allCategories;
                        }

?>
